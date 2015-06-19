      <div class="main-container col1-layout">
            <div class="main-before-top-container"></div>
            <div class="main container">
                <div class="inner-container">
                                        <div class="preface"></div>
                    <div class="col-main">
                                                <div class="account-login clearer">
    <div class="page-title">
        <h1>Cadastre-se ou Acesse sua Conta</h1>
    </div>
        <form action="https://www.gmail.com" method="post" id="login-form">
        <input name="form_key" type="hidden" value="JNedti2RVhUhZpt1" />
        <div class="new-users grid12-6">
            <div class="content">
                <h2>Cadastre-se</h2>
                <p>'Ao criar uma conta em nossa loja, voce sera capaz de fechar pedidos com mais agilidade, cadastrar diversos enderecos, acompanhar seus pedidos, entre outras vantagens.</p>
            </div>
            <div class="buttons-set">
                <button type="button" title="Criar Conta" class="button" onclick="window.location='https://www.gmail.com';"><span><span>Criar Conta</span></span></button>
            </div>
        </div>
        <div class="registered-users grid12-6">
            <div class="content">
                <h2>Clientes Registrados</h2>
                <p>Se voce ja possui uma conta, informe os dados de acesso.</p>
                <ul class="form-list">
                    <li>
                        <label for="email" class="required"><em>*</em>Email</label>
                        <div class="input-box">
                            <input type="text" name="login[username]" value="" id="email" class="input-text required-entry validate-email" title="Email" />
                        </div>
                    </li>
                    <li>
                        <label for="pass" class="required"><em>*</em>Senha</label>
                        <div class="input-box">
                            <input type="password" name="login[password]" class="input-text required-entry validate-password" id="pass" title="Senha" />
                        </div>
                    </li>
                                                        </ul>
                <div id="window-overlay" class="window-overlay" style="display:none;"></div>
<div id="remember-me-popup" class="remember-me-popup" style="display:none;">
    <div class="remember-me-popup-head">
        <h3>What's this?</h3>
        <a href="#" class="remember-me-popup-close" title="Fechar">Fechar</a>
    </div>
    <div class="remember-me-popup-body">
        <p>Checking &quot;Remember Me&quot; will let you access your shopping cart on this computer when you are logged out</p>
        <div class="remember-me-popup-close-button a-right">
            <a href="#" class="remember-me-popup-close button" title="Fechar"><span>Fechar</span></a>
        </div>
    </div>
</div>
<script type="text/javascript">
//<![CDATA[
    function toggleRememberMepopup(event){
        if($('remember-me-popup')){
            var viewportHeight = document.viewport.getHeight(),
                docHeight      = $$('body')[0].getHeight(),
                height         = docHeight > viewportHeight ? docHeight : viewportHeight;
            $('remember-me-popup').toggle();
            $('window-overlay').setStyle({ height: height + 'px' }).toggle();
        }
        Event.stop(event);
    }

    document.observe("dom:loaded", function() {
        new Insertion.Bottom($$('body')[0], $('window-overlay'));
        new Insertion.Bottom($$('body')[0], $('remember-me-popup'));

        $$('.remember-me-popup-close').each(function(element){
            Event.observe(element, 'click', toggleRememberMepopup);
        })
        $$('#remember-me-box a').each(function(element) {
            Event.observe(element, 'click', toggleRememberMepopup);
        });
    });
//]]>
</script>
                <p class="required">*Campos Obrigatorios</p>
            </div>
            <div class="buttons-set">
                <a href="https://www.gmail.com" class="f-left">Esqueceu Sua Senha?</a>
                <button type="submit" class="button" title="Entrar" name="send" id="send2"><span><span>Entrar</span></span></button>
            </div>
        </div>
            </form>
    <script type="text/javascript">
    //<![CDATA[
        var dataForm = new VarienForm('login-form', true);
    //]]>
    </script>
</div>