<main class="c_main">
    {* header *}
    <div class="c_header">
        <div class="c_header_logo">
            <img class="c_header_logo_img" src="{$logo.src}" alt="" />
        </div>
        <p class="c_header_title">{$nameProject}</p>
    </div>
    {* body *}
    <div class="c_body">
        <div class="c_body_i">
            {* left *}
            <div class="c_body_left">
                
                {foreach from=$files item=$item key=key name=name}
                <p class="c_body_card_title">{$item.title}</p>
                <div class="c_body_card">
                    {if ($item.type == 'png' || $item.type == 'jpg' || $item.type == 'svg' || $item.type == 'jpeg')}
                    <div class="c_body_file">
                        <img src="{$item.src}" alt="" />
                    {else}
                        <div class="c_body_file c_body_file_unknown">      
                    {/if}
                        <p class="c_body_file_type">{$item.type}</p>
                    </div>
                    <div class="c_body_btns">
                        <a href="{$item.src}" download class="c_body_btn_1"></a>
                        <div img_id="{$item.id}" class="c_body_file_chb"></div>
                    </div>
                </div> 
                {/foreach}  
                {*  *}

            </div>
            {* right *}
            <div class="c_body_right">
                <div class="c_head">
                    <p class="c_head_title">Выбранно: <span class="c_head_l" id="count">0</span></p>
                    <div class="c_head_w">
                        <button id="select_all" class="c_head_btn">Выбрать все</button>
                        <button id="clear_all" class="c_head_btn">Снять выделение</button>
                    </div>
                </div>
                <div class="c_form">
                    <input id="email" type="text" class="c_form_f" autocomplete="off" placeholder="example@email.ru;example@email.ru;example@email.ru">
                    <textarea id="message" class="c_form_ta" autocomplete="off" placeholder="Сообщение..."></textarea>
                    <div class="c_form_w">
                        <p id="success" class="c_form_success">Успех</p>
                        <button id="send" class="c_form_btn c_form_btn_disabled">Отправить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="/js/lk-klienta.js"></script>