<?php

error_reporting(E_ALL);

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
	$domain	= $_SERVER["HTTP_HOST"];

	$parse_url = parse_url($_SERVER["REQUEST_URI"]);
	$path = preg_split('/\/+/', $parse_url['path'], -1, PREG_SPLIT_NO_EMPTY);
	
	$controller = isset($path[1]) ? $path[1] : '';
	$action = isset($path[2]) ? $path[2] : '';

	include_once '../define.php';

	if (!session_id())
	{
		session_start();
	}

	if ($controller == 'sendmessage')
	{
		$status = false;
		$errors = array();
		$responce = array();

		$name = isset($_POST['name']) ? $_POST['name'] : '';
		$phone = isset($_POST['phone']) ? $_POST['phone'] : '';

		if ($name == '')
		{
			$errors['name'] = 'name';
		}

		if ($phone == '')
		{
			$errors['phone'] = 'phone';
		}
		else
		{
			$_phone = str_replace(array('(', ')', '-', ' ', '+'), '', $phone);

			if (strlen($_phone) !== 11)
			{
				$errors['phone'] = 'phone';
			}
		}

		if (empty($errors))
		{
			$message = '<p>Имя: ' . $name . '</p><p>Телефон: ' . $phone . '</p>';
			$responce['message'] = $message;
			$emails = getfl('emails');
	        sendMail('Заказ консультации с сайта', $message, 'info@sk-zenit.ru', $emails, 'sD1VRF4J', 'smtp.timeweb.ru');
	        $status = true;

	        O('_mdd_consultation')->create(array(
	            's:name'        =>  $name,
	            's:phone'       =>  $phone,
	            'e:created'     =>  'NOW()',
	            'i:visible'     =>  1
	        ));
       	}

		$responce['status'] = $status;
		$responce['errors'] = $errors;

		if ($status)
		{
			//$responce['title'] = 'Спасибо';
			//$responce['message'] = 'Ваше сообщение было отправлено успешно. Спасибо.';
		}

		exit(
			json_encode( $errors, 64 | 256 )
		);
	}

	#
	if ($controller == 'feedback')
	{
		$status = false;
		$errors = array();
		$responce = array();

		$name = isset($_POST['name']) ? $_POST['name'] : '';
		$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
		$text = isset($_POST['text']) ? $_POST['text'] : '';

		
		if ($name == '')
		{
			$errors['name'] = 'name';
		}


		$_phone = str_replace(array('(', ')', '-', ' ', '+'), '', $phone);

		if (strlen($_phone) !== 11 || $phone == '')
		{
			$errors['phone'] = 'phone';
		}
		

		if (empty($errors))
		{
			# Отправка письма
            $domen = str_replace([ 'http://', 'www.', 'www' ], '', $_SERVER['SERVER_NAME']);

            $subject = "Сообщение с сайта 2BR";

            $body  = '';
            $body .= '<p>Здравствуйте,</p>';
            $body .= '<p>Новое сообщение, на сайте ' . $domen . '</p>';
            $body .= '<p>--------------------</p>';

            $body .= '<p>Контактное лицо: <strong>'. $name .'</strong></p>';                    
           
            $body .= '<p>Телефон: <strong>'. $phone .'</strong></p>';
            

            if (!empty($text))
            {
                $body .= '<p>Текст письма: <strong>'. $text .'</strong></p>';
            }

            $body .= '<p>--------------------</p>';
            $body .= '<p>Дата отправки: '. date('d.m.Y H:i:s') .'</p>';

            $emails = getfl('emails');

            // Create the Transport
            $transport = (new \Swift_SmtpTransport('smtp.mail.ru', 465, 'ssl'))
                ->setUsername('brand@2-br.ru')
                ->setPassword('21081986a')
            ;

            // Create the Mailer using your created Transport
            $mailer = new \Swift_Mailer($transport);

            // Create a message
            $message = (new \Swift_Message($subject))
                ->setFrom(['brand@2-br.ru' => '2-br.ru'])
                ->setTo($emails)
                ->setBody($body, 'text/html')
            ;

			//$message = '<p><strong>Имя: </strong>' . $name . '</p><p><strong>Телефон: </strong>' . $phone . '</p><p><strong>Сообщение: </strong>'. $text .'</p>';
			//$emails = getfl('emails');
	        //sendMail('Сообщение с сайта КС-Клиник', $message, '92279@inbox.ru', $emails, '2212198638180067olga', 'smtp.inbox.ru');
	        if ($mailer->send($message))
            {
	        	$status = true;
	        }
	        else {
	        	$status = false;
	        }

	        //O('_mdd_consultation')->create(array(
	        //    's:name'        =>  $name,
	        //    's:phone'       =>  $phone,
	        //    'e:created'     =>  'NOW()',
	        //    'i:visible'     =>  1
	        //));
       	}

		$responce['status'] = $status;
		$responce['errors'] = $errors;		

		exit(
			json_encode( $responce, 64 | 256 )
		);
	}

	#######################################################################
	if ($controller == 'forgotPassword') 
	{
		$email = strip_tags(trim($_POST['email']));
		//
		if(strripos($email, '@') === false) {
			exit(json_encode(-1));
		}
		//
		$id = Q("SELECT id FROM db_mdd_users WHERE email = ?s", [$email])->row();
		if(is_null($id)) {
			exit(json_encode(0));
		}
		$id = array_shift($id);
		//
		$hash = hash('sha256', $email);
		//
		$result = Q("UPDATE db_mdd_users SET forgot_password = ?s WHERE id = ?s", [$hash, $id]);
		//
		echo json_encode(1);
		//
		$mess = 'Сообщение с ссылкой ' . $hash;
		//
		$transport = (new Swift_SmtpTransport('smtp.mail.ru', 465, 'ssl'))
			->setUsername('prog@2-br.ru')
			->setPassword('123123prog');
		// print_r($transport->start());
		//
		$mailer = new Swift_Mailer($transport);
		//
		$message = new Swift_Message('Восстановление пароля');
		$message->setFrom(['prog@2-br.ru' => 'admin']);
		$message->setTo($email);
		$message->setBody('<p>Для восстановления пароля перейдите по указанной ссылке: </p><a href="http://temp.2-br.ru/recovery?link=' . $hash . '">Перейти</a>', 'text/html');
		//
		$mailer->send($message);
		//
	}
	////////////////////////////////////////////////////////////////////////
	if ($controller == 'recoveryPassword') 
	{
		$password = strip_tags(trim($_POST['pass']));
		$dublePassword = strip_tags(trim($_POST['duble_pass']));
		$hash = strip_tags(trim($_POST['hash']));
		//
		if($password !== $dublePassword || strlen($hash) === 0) {
			exit(json_encode(0));
		}
		//
		$result = Q("SELECT id FROM db_mdd_users WHERE forgot_password = ?s ", [$hash])->row();
		if(empty($result)) {
			exit(json_encode(0));
		}
		//
		$id = $result['id'];
		//
		$result = Q("UPDATE db_mdd_users SET password = ?s, forgot_password = ?s WHERE id = ?s", [$password, NULL, $id]);
		//
		exit(json_encode($result));
		//
	}
	////////////////////////////////////////////////////////////////////////
	if ($controller == 'signIn') 
	{
		$login = strip_tags(trim($_POST['login']));
		$password = strip_tags(trim($_POST['password']));
		// 
		if(strlen($login) == 0 || strlen($password) == 0) {
			exit(json_encode(0));
		}
		//
		$result = Q("SELECT id, name FROM db_mdd_users WHERE email = ?s AND password = ?s", [$login, $password])->row();
		if(empty($result)) {
			exit(json_encode(0));
		}
		//
		$_SESSION['user_id'] = $result['id'];
		$_SESSION['user_name'] = $result['name'];
		//
		exit(json_encode(1));
	}
	////////////////////////////////////////////////////////////////////////
	if ($controller == 'signOut') 
	{
		$_SESSION['user_id'] = NULL;
		$_SESSION['user_name'] = NULL;
	}
	////////////////////////////////////////////////////////////////////////
	if ($controller == 'updatePersonalData') 
	{
		if(!isset($_SESSION['user_id'])) {
			exit(json_encode(-1));
		}
		//
		$userId = $_SESSION['user_id'];
		$name = strip_tags(trim($_POST['name']));
		$email = strip_tags(trim($_POST['email']));
		$phone = strip_tags(trim($_POST['phone']));
		//
		if(strlen($name) === 0 || strlen($phone) < 10 || strpos($email, '@') === false) {
			exit(json_encode(-1));
		}
		//
		$result = Q("UPDATE db_mdd_users SET `name` = ?s, email = ?s, phone = ?s WHERE id = ?s", [$name, $email, $phone, $userId]);
		// 
		$_SESSION['user_name'] = $name;
		//
		exit(json_encode(1));
	}
	////////////////////////////////////////////////////////////////////////
	if ($controller == 'updatePassword') 
	{
		if(!isset($_SESSION['user_id'])) {
			exit(json_encode(-1));
		}
		//
		$userId = $_SESSION['user_id'];
		$passwordOld = strip_tags(trim($_POST['password_old']));
		$passwordNew = strip_tags(trim($_POST['password_new']));
		$passwordNewDuble = strip_tags(trim($_POST['password_new_duble']));
		//
		if(strlen($passwordOld) === 0 || strlen($passwordNew) === 0 || strlen($passwordNewDuble) === 0 || $passwordNew !== $passwordNewDuble) {
			exit(json_encode(-1));
		}
		//
		$result = Q("SELECT `password` FROM db_mdd_users WHERE id = ?s", [$userId])->row();
		if(empty($result)) {
			exit(json_encode(-1));
		}
		//
		if($result['password'] !== $passwordOld) {
			exit(json_encode(0));
		}
		//
		$result = Q("UPDATE db_mdd_users SET `password` = ?s WHERE id = ?s", [$passwordNew, $userId]);
		// 
		//
		exit(json_encode(1));
	}
	////////////////////////////////////////////////////////////////////////
	if ($controller == 'getMonthEvent') 
	{	
		if(!isset($_POST['date']) && strlen(strip_tags(trim($_POST['date']))) === 0) {
			exit(json_encode(0));	
		}
		//
		$date = strip_tags(trim($_POST['date']));
		//
		$array = explode('-', $date);
		$thisMonth = 0;
		if($array[2] != 0) {
			$thisMonth = 1;
			$today = $array[2];
		} else {
			$array[2] = '01';
			$today = 0;
		}
		$date = implode("-", $array);
		//
		if(!strtotime($date)) {
			$date = date('Y-m') . '-01';
		}
		$userId = $_SESSION['user_id'];
		// 
		$months = [
			1 => 'Январь',
			2 => 'Февраль',
			3 => 'Март',
			4 => 'Апрель',
			5 => 'Май',
			6 => 'Июнь',
			7 => 'Июль',
			8 => 'Август',
			9 => 'Сентябрь',
			10 => 'Октябрь',
			11 => 'Ноябрь',
			12 => 'Декабрь'
		];
		//
		$result = [
			'date' => [
				'today' => $today,
				'thisMonth' => $thisMonth,
				'monthNum' => date('n', strtotime($date)),
				'monthName' => $months[date('n', strtotime($date))],
				'monthLength' => date('t', strtotime($date)),
				'firsDayOfTheWeek' => date('N', strtotime(date('Y-m', strtotime($date)) . '-01')),
				'year' => date('Y', strtotime($date))
			],
			'events' => []
		];
		// 
		$startDateSql = date('Y-m', strtotime($date)) . '-01';
		$finishDateSql = date('Y-m-t', strtotime($date));
		// 
		$response = Q("SELECT * FROM db_mdd_projectplan WHERE user_id = ?s AND event_date >= ?s AND event_date <= ?s ORDER BY event_date ASC", [$userId, $startDateSql, $finishDateSql])->all();
		//
		if(empty($response)) {
			exit(json_encode($result));
		}
		// 
		$index = 10;
		foreach ($response as $event) {
			$result['events'][$index] = [
				'name' => $event['event'],
				'time' => $event['event_time'],
				'date' => $event['event_date'],
				'place' => $event['place'],
				'dayNum' => date('j', strtotime($event['event_date'])),
				'monthNum' => date('n', strtotime($event['event_date'])),
				'yearNum' => date('Y', strtotime($event['event_date']))
			];
			$index += 10;
		}
		//
		exit(json_encode($result));
	}
	////////////////////////////////////////////////////////////////////////
	if ($controller == 'brif') 
	{	
		$scope = $_POST['scope'];
		$works = json_decode($_POST['works']);
		$connect = json_decode($_POST['connect']);
		$link = $_POST['link'];
		$date = date('d.m.Y');
		
		// $result = Q("INSERT INTO `db_mdd_brifs` SET `scope` = ?s, `works` = ?s, `connect` = ?s, `link` = ?s, `date` = ?s", [$scope, implode(" / ", $works), implode(" / ", $connect), $link, $date]);
		O('_mdd_brifs')->create(array(
	           's:scope'        =>  $scope,
	           's:works'       =>  implode(" / ", $works),
	           's:connect'       =>  implode(" / ", $connect),
	           's:link'        =>  $link,
	           's:date'        =>  $date,
	           'e:created'     =>  'NOW()',
	           'i:visible'     =>  1
	        ));
		
		$mess = 'Дата:'. $date. "\n\n";
		$mess .= "Бриф с сайта 2Br: \n\n";
		$mess .= "Сфера деятельности компании: \n";
		$mess .= $scope ."\n\n";
		$mess .= "Какие работы необходимо провести: \n";
		foreach ($works as $work) {
			$mess .= $work . "\n";
		}
		$mess .= "\n";
		$mess .= "Как удобно будет связаться: \n";
		foreach ($connect as $con) {
			$mess .= $con . "\n";
		}
		$mess .= "\n";
		$mess .= "Ссылка на сайт/Instagram: \n";
		$mess .= $link;
		echo 1;

		$transport = (new Swift_SmtpTransport('smtp.mail.ru', 465, 'ssl'))
			->setUsername('prog@2-br.ru')
			->setPassword('Prog123456789prog');
		// print_r($transport->start());
		//
		$mailer = new Swift_Mailer($transport);
		//
		$message = new Swift_Message('Бриф с сайта');
		$message->setFrom(['prog@2-br.ru' => 'admin']);
		// $message->setTo('prog@2-br.ru');
		$message->setTo('brand@2-br.ru');
		$message->setBody($mess, 'text/plain');
		//
		$mailer->send($message);

	}
	////////////////////////////////////////////////////////////////////////
	if ($controller == 'sendPromo') 
	{	
		$email = $_POST['email'];
		
		$mess = "Промокод от 2Br: <strong>2Br-Branding Today</strong>";

		echo 1;
		$transport = (new Swift_SmtpTransport('smtp.mail.ru', 465, 'ssl'))
			->setUsername('prog@2-br.ru')
			->setPassword('Prog123456789prog');
		// print_r($transport->start());
		//
		$mailer = new Swift_Mailer($transport);
		//
		$message = new Swift_Message('Промокод от 2Br');
		$message->setFrom(['prog@2-br.ru' => '2Br']);
		$message->setTo($email);
		// $message->setTo('brand@2-br.ru');
		$message->setBody($mess, 'text/html');
		//
		$mailer->send($message);

	}
	#######################################################################

	elseif( $controller == 'search' )
	{
		$term = __get( 'term' );
		$result = Q("SELECT `id`, `city`, `region` FROM `#_mdd_cityes` WHERE `city` LIKE '%". $term ."%' ORDER BY `city` ASC LIMIT 10")->all();
		if( !empty ( $result ) )
		{
			foreach( $result as &$arr )
			{
				$arr['label'] = str_replace( $term, '<span class="autocomplete-selected">' . $term . '</span>', $arr['city'] );
			}
		}
		echo json_encode( $result );
	}

	elseif ($controller == 'registration')
	{
		$phone 		= __post('phone');
		$password 	= __post('password');
		$name 		= __post('name');
		$email 		= __post('email');
		$city 		= __post('city');
		$address 	= __post('address');

		$result = Q("INSERT INTO `#_mdd_users` SET `phone`=?s, `password`=?s, `name`=?s, `email`=?s, `city`=?s, `address`=?s, `created`=NOW()", array( 
			$phone, md5( $password ), $name, $email, $city, $address
		));

		echo json_encode( array( 'result' => 1 ), 64 | 256 ); 
	}

	elseif( $controller == 'validation' )
	{
		$value = __post('value');
		$field = isset($path[2] ) ? $path[2] : '';

		if( $field !== '' )
		{
			if( $field == 'email' )
			{
				if( !isset($_SESSION['registration']['email_code'] ) || empty( $_SESSION['registration']['email_code'] ) )
				{
					$_SESSION['registration']['email_code'] = rand(10000, 99990);

					$code = $_SESSION['registration']['email_code'];
					$domen = str_replace( array( 'http://', 'www.', 'www' ) , '', $_SERVER['SERVER_NAME'] );
				   
					$m  = '<p>Здравствуйте!</p>';
					$m .= '<p>Ваш код подтверждения на сайте ' . $domen . ': ' . $code . '</p>';
					$m .= '<p>Дата и время отправки сообщения: '. date( 'd.m.Y H:i:s' ) .'</p>';

					$sended = sendMail('Подтверждение адреса электронной почты', $m, 'info@' . $domen, $value);
					
					$result = (int)is_email($value) && $sended;
				}
				else
				{
					$result = 0;
				}

				echo
					json_encode(
						array(
							'result' => $result
						), 64 | 256
					);
			}
			elseif( $field == 'email_code' )
			{
				if( $_SESSION['registration']['email_code'] == $value )
				{
					$result = 1;
				}
				else
				{
					$result = 0;
				}

				echo json_encode(
					array(
						'result' => $result
					), 64 | 256
				);
			}
			elseif( $field == 'phone' )
			{
				if( is_phone($value) )
				{
					$domen = str_replace( array( 'http://', 'www.', 'www' ) , '', $_SERVER['SERVER_NAME'] );
					$phone = str_replace( array( '+', '(', ')', ' ', '-' ), '', $value );

					if( !isset($_SESSION['registration']['phone_code'] ) || empty( $_SESSION['registration']['phone_code'] ) )
					{
						$_SESSION['registration']['phone_code'] = rand(10000, 99990);

						$code = $_SESSION['registration']['phone_code'];
						$url = "http://sms.ru/sms/send?api_id=973996a8-7094-1674-d1b6-e7f63a0c826a&to=". $phone ."&text=" . urlencode( "Ваш код подтверждения на сайте " . $domen . ": " ) . $code;
						$responce = file_get_contents( $url );
					}

					$result = 1;
				}
				else
				{
					$result = 0;
				}
				
				echo json_encode(
					array(
						'result' => $result
					), 64 | 256
				);
			}
			elseif( $field == 'phone_code' )
			{
				if( $_SESSION['registration']['phone_code'] == $value )
				{
					$result = 1;
				}
				else
				{
					$result = 0;
				}

				echo json_encode(
					array(
						'result' => $result
					), 64 | 256
				);
			}
			elseif( $field == 'fio' )
			{
				if((bool)preg_match('~[^а-яёА-ЯЁ\- ]~u', $value))
				{
					$result = 0;
				}
				else
				{
					$result = 1;
				}

				echo json_encode(
					array(
						'result' => $result
					), 64 | 256
				);
			}
			elseif( $field == 'address' )
			{
				$result = 1;
				
				echo json_encode(
					array(
						'result' => $result
					), 64 | 256
				);
			}
			elseif( $field == 'birthdate' )
			{
				echo json_encode(
					array(
						'result' => 0
					), 64 | 256
				);
			}
			elseif( $field == 'passport_series' )
			{
				echo json_encode(
					array(
						'result' => 0
					), 64 | 256
				);
			}
			elseif( $field == 'passport_number' )
			{
				echo json_encode(
					array(
						'result' => 0
					), 64 | 256
				);
			}
			elseif( $field == 'passport_issued' )
			{
				echo json_encode(
					array(
						'result' => 0
					), 64 | 256
				);
			}
			elseif( $field == 'passport_date' )
			{
				echo json_encode(
					array(
						'result' => 0
					), 64 | 256
				);
			}
			elseif( $field == 'info' )
			{
				echo json_encode(
					array(
						'result' => 1
					), 64 | 256
				);
			}
			elseif( in_array( $field, array( 'site', 'vkontakte', 'facebook', 'odnoklassniki', 'moimir', 'twitter', 'livejournal' ) ) )
			{
				$result = ( _isURL( $value ) && checkLink( $value ) ) ? 1 : 0 ;
				
				echo json_encode(
					array(
						'result' => $result
					), 64 | 256
				);
			}
			else
			{
				echo json_encode(
					array(
						'result' => 0
					), 64 | 256
				);
			}
		}
	}

	return true ;
}