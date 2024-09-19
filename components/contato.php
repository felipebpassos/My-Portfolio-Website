<?php 

// Carrega o autoload do Composer para carregar as classes do PHPMailer e Dotenv
require 'vendor/autoload.php';

use Dotenv\Dotenv;

// Carrega as variáveis do arquivo .env
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

?>

<!-- Formulário para contato -->
<div class="popup hidden" id="contato-form">

    <div class="close-popup">
        <div class="close" id="close-contato" onmouseover="startAnimation()" onmouseout="resetAnimation()">
            <svg class="close-ring" width="61" height="61">
                <circle class="close-ring__circle" id="closeCircle" stroke="rgb(42, 217, 223)" stroke-width="2"
                    fill="transparent" r="28" cx="30" cy="30" />
                <circle class="close-ring__circle-full" stroke="rgba(255, 255, 255, 0.2)" stroke-width="2"
                    fill="transparent" r="28" cx="30" cy="30" />
            </svg>
            <svg class="x" viewBox="0 0 12 12" style="height: 12px; width: 12px;">
                <path stroke="rgb(180, 180, 180)" fill="rgb(180, 180, 180)"
                    d="M4.674 6L.344 1.05A.5.5 0 0 1 1.05.343L6 4.674l4.95-4.33a.5.5 0 0 1 .707.706L7.326 6l4.33 4.95a.5.5 0 0 1-.706.707L6 7.326l-4.95 4.33a.5.5 0 0 1-.707-.706L4.674 6z">
                </path>
            </svg>
        </div>
    </div>

    <div class="formulario">
        <div class="row">
            <form method="POST" action="../envia-email.php">
                <h5 class="section-title" style="padding: 0 15px; margin-bottom: 20px;">Contato</h5>
                <h3>Tem algum projeto em mente? Entre em contato conosco para transformá-lo em realidade.
                    Grande ou
                    pequeno. Web ou Mobile.</h3>
                <div class="row">
                    <div class="m-3 col">
                        <label for="nome">Seu nome</label>
                        <input type="text" id="nome" name="nome" placeholder="Qual seu nome?" maxlength="40" required>
                    </div>
                    <div class="m-3 col">
                        <label for="email">Whatsapp</label>
                        <input type="text" id="whatsapp" name="whatsapp" placeholder="Ex.: (11) 9 9999-9999" maxlength="16" required>
                    </div>
                </div>
                <div class="row">
                    <div class="m-3 col">
                        <label for="select-servico">Serviço</label>
                        <div class="select-container" id="select-servico">
                            <div class="selected-option">
                                <span>No que está interessado?</span>
                                <svg width="12" height="8" viewBox="0 0 42 25">
                                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7"
                                        stroke-linecap="round"></path>
                                </svg>
                            </div>
                            <div class="options-container">
                                <div class="option" data-value="1">Ajuda em um projeto</div>
                                <div class="option" data-value="2">Parceria de longo prazo</div>
                                <div class="option" data-value="3">Contratar em tempo integral</div>
                                <div class="option" data-value="4">Apenas dizer "Oi!"</div>
                            </div>
                        </div>
                    </div>
                    <div class="m-3 col">
                        <label for="select-budget">Orçamento</label>
                        <div class="select-container" id="select-budget">
                            <div class="selected-option">
                                <span>Qual seu orçamento?</span>
                                <svg width="12" height="8" viewBox="0 0 42 25">
                                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7"
                                        stroke-linecap="round"></path>
                                </svg>
                            </div>
                            <div class="options-container">
                                <div class="option" data-value="1">R$1000 - R$2500</div>
                                <div class="option" data-value="2">R$2500 - R$5000</div>
                                <div class="option" data-value="3">R$5000 - R$10000</div>
                                <div class="option" data-value="4">R$10000 ou mais</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="message-box">
                    <label for="mensagem">Mensagem</label>
                    <textarea id="mensagem" name="mensagem" placeholder="Deixe uma mensagem"></textarea>
                    <script>
                        const textarea = document.querySelector('textarea');

                        textarea.addEventListener('input', () => {
                            textarea.style.height = 'auto'; // Redefinir a altura para o valor padrão
                            textarea.style.height = `${textarea.scrollHeight}px`; // Definir a altura do textarea como a altura do texto
                        });
                    </script>
                </div>
                <div class="contato-form-btns">
                    <button type="submit">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20"
                            enable-background="new 0 0 20 20" space="preserve">
                            <path fill="#ffffff"
                                d="M16,17H4a2,2,0,0,1-2-2V5A2,2,0,0,1,4,3H16a2,2,0,0,1,2,2V15A2,2,0,0,1,16,17Zm0-2V7.619l-6,4.242L4,7.619V15H16ZM4,5V5.705l6,3.429,6-3.429V5H4Z">
                            </path>
                        </svg>
                        Enviar mensagem
                    </button>
                    <div class="g-recaptcha" data-sitekey="<?php echo $_ENV['RECAPTCHA_PUBLIC_KEY']?>"
                        style="margin-left: 15px; margin-bottom: 30px;" data-theme="dark"></div>
                </div>
            </form>
        </div>
    </div>

</div>