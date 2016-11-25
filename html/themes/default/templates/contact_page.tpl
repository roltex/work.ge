<div class="row">
    <div class="content clearfix">
        <h2 class="font-title">{if $info_title}{$info_title}{else}{$site_data.section_name}{/if}</h2>
        <p class="txt-block">{$info_content}</p>
        
        <div class="contact-wrap clearfix">
        <!--Form block (left bar)-->
            <div class=" col-md-6 left np">
                {if $notification}
                <p class="alert alert-success">{$notification}</p>
                {/if}
                {if $error}
                <p class="alert alert-danger">{$error}</p>
                {/if}
                <div class="form-wrap">
                    <form action="">
                        <input type="text" name="name" value="" placeholder="{$language.name}" />
                        <input type="text" name="email" value="" placeholder="{$language.email}" />
                        <input type="text" name="phone" value="" placeholder="{$language.phone}" />
                        <textarea name="message" id="" placeholder="{$language.message}"></textarea>
                    </form>
                    
                    <a href="#" class="font-title send-btn">{$language.send}</a>
        
                </div>
            </div>
            
            
            <!--Info wrap (right bar)-->
            <div class="info-wrap col-md-6 right np clearfix">
                <h3 class="font-title">{$language.contact_information}</h3>
                <ul>
                    <li class="clearfix">
                        <span><i class="icon-menu_41"></i></span>
                        <div class="info">{$phone}</div>
                    </li>
                    <li class="clearfix">
                        <span><i class="icon-menu_24"></i></span>
                        <div class="info">{$email}</div>
                    </li>
                    <li class="clearfix">
                        <span><i class="icon-menu_34"></i></span>
                        <div class="info">{$address}</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>