<?php
//________________________TEXTOS BASE________________________________
// define('URL_BASE', 'http://10.26.8.175/');
define('URL_BASE', 'http://localhost/');
define('NAME_APP', 'Sistema Modelo');

//________________________PATH_______________________________________
define('CDN', URL_BASE.'cdn/');
define('CDN_CSS', URL_BASE.'cdn/assets/css/');
define('CDN_IMG_APOIO', URL_BASE.'cdn/assets/img/apoio/');

define('CDN_JS', URL_BASE.'cdn/assets/js/');
define('CDN_ASSETS', URL_BASE.'cdn/assets/');
define('CDN_JS_INIT', URL_BASE.'cdn/assets/js/init/');
define('CDN_JS_CORE', URL_BASE.'cdn/assets/js/core/');
define('CDN_JS_PLUGINS', URL_BASE.'cdn/assets/js/plugins/');
define('CDN_FONTAWESOME', URL_BASE.'cdn/assets/fontawesome/');


define('PATH_UPLOAD_USUARIO', 'assets/upload/usuarios/');
define('PATH_UPLOAD_ANEXO', 'assets/upload/usuarios/');
define('PATH_APOIO_PROCON', 'assets/img/apoio/logo.png');
define('PATH_APOIO_LOGOS', 'assets/img/apoio/logo_all.jpeg');
define('PATH_APOIO_GOVERNO', 'assets/img/apoio/imggov.png');
define('PATH_APOIO_TEST_USER', 'assets/img/apoio/test_user.jpg');
define('PATH_APOIO_TEST_USER_2', 'assets/img/apoio/test_user2.png');
define('PATH_SEM_IMAGEM', CDN_IMG_APOIO.'no-image.jpg');
define('PATH_SEM_FOTO', CDN_IMG_APOIO.'no-foto.png');
define('PATH_IMG_LOGIN', CDN_IMG_APOIO.'person_login.png');
define('PATH_UPLOAD_FILE_ANEXO', 'assets/upload/usuarios/');

//________________________CS_______________________________________
define('CDN_CSS_CORE_ALL', '
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<link href="'.CDN_CSS.'nucleo-icons.css" rel="stylesheet" />
<link href="'.CDN_CSS.'nucleo-svg.css" rel="stylesheet" />
');
define('CDN_CSS_FONTAWESOME_ALL', '
<link href="'.CDN_FONTAWESOME.'css/all.min.css" rel="stylesheet" />
<link href="'.CDN_FONTAWESOME.'fontawesome/css/all.min.css" rel="stylesheet" />
');
define('CDN_CSS_JQUERY_TOAST', '<link href="'.CDN_CSS.'jquery.toast.min.css" rel="stylesheet" />');
define('CDN_CSS_MAIN', '<link id="pagestyle" href="'.CDN_CSS.'argon-dashboard.css?v=2.0.5" rel="stylesheet" />');

//________________________JS_______________________________________
define('CDN_JS_CORE_ALL', '
<script src="'.CDN_JS_CORE.'jquery-3.6.0.min.js"></script>
<script src="'.CDN_JS_CORE.'popper.min.js"></script>
<script src="'.CDN_JS_CORE.'bootstrap.min.js"></script>
');

define('CDN_JS_FONTAWESOME_ALL', '
<script src="'.CDN_FONTAWESOME.'js/all.min.js"></script>
<script src="'.CDN_FONTAWESOME.'fontawesome/js/all.min.js"></script>
');

define('CDN_JS_MULTISTEP_FORM', '<script src="'.CDN_JS_PLUGINS.'multistep-form.js"></script>');
define('CDN_JS_PAGES', '<script src="'.CDN_JS.'pages.js"></script>');

define('CDN_JS_DATATABLES', '
<script src="'.CDN_JS_PLUGINS.'datatables.js"></script>
<script src="'.CDN_JS_INIT.'datatables.js"></script>
');

define('CDN_JS_MASK', '
<script src="'.CDN_JS_PLUGINS.'jquery.mask.min.js"></script>
<script src="'.CDN_JS_INIT.'jquery.mask.js"></script>
');

define('JS_PLUGIN_CHOICES', '
    <script src="'.CDN_JS_PLUGINS.'choices.min.js" type="text/javascript"></script>
    <script src="'.CDN_JS_INIT.'choices.js" type="text/javascript"></script>
');

define('CDN_JS_TOAST', '
<script src="'.CDN_JS_PLUGINS.'jquery.toast.min.js"></script>
<script src="'.CDN_JS_INIT.'jquery.toast.js"></script>
');

define('CDN_JS_SWEETALERT2', '
<script src="'.CDN_JS_PLUGINS.'sweetalert2.min.js"></script>
<script src="'.CDN_JS_INIT.'sweetalert2.js"></script>
');

define('CDN_JS_QUILL', '
<script src="'.CDN_JS_PLUGINS.'quill.min.js"></script>
<script src="'.CDN_JS_INIT.'quill.js"></script>
');

define('CDN_JS_PERFECT_SCROLLBAR', '
<script src="'.CDN_JS_PLUGINS.'perfect-scrollbar.min.js"></script>
<script src="'.CDN_JS_PLUGINS.'smooth-scrollbar.min.js"></script>
<script src="'.CDN_JS_INIT.'perfect-scrollbar.js"></script>
');

define('CDN_JS_MAIN', '<script src="'.CDN_JS.'argon-dashboard.min.js?v=2.0.5"></script>');
define ('PLUGIN_JS',
    [
        'choices' => JS_PLUGIN_CHOICES,
        'datatables' => CDN_JS_DATATABLES,
        'mask' => CDN_JS_MASK,
        'toast' => CDN_JS_TOAST,
        'sweetalert2' => CDN_JS_SWEETALERT2,
        'quill' => CDN_JS_QUILL,
        'perfect-scrollbar' => CDN_JS_PERFECT_SCROLLBAR,
    ]
);

//________________________ARRAYS UTEIS________________________________
define('MES', [
    '01' => 'janeiro',
    '02' => 'fevereiro',
    '03' => 'março',
    '04' => 'abril',
    '05' => 'maio',
    '06' => 'junho',
    '07' => 'junho',
    '08' => 'agosto',
    '09' => 'setembro',
    '10' => 'outubro',
    '11' => 'novembro',
    '12' => 'dezembro',
]);
define('MES__', [
    '1' => 'janeiro',
    '2' => 'fevereiro',
    '3' => 'março',
    '4' => 'abril',
    '5' => 'maio',
    '6' => 'junho',
    '7' => 'junho',
    '8' => 'agosto',
    '9' => 'setembro',
    '10' => 'outubro',
    '11' => 'novembro',
    '12' => 'dezembro',
]);

define('MES_', [
    '0' => 'dezembro',
    '1' => 'janeiro',
    '2' => 'fevereiro',
    '3' => 'março',
    '4' => 'abril',
    '5' => 'maio',
    '6' => 'junho',
    '7' => 'junho',
    '8' => 'agosto',
    '9' => 'setembro',
    '10' => 'outubro',
    '11' => 'novembro',
    '12' => 'dezembro',
    '13' => 'janeiro',
]);

define('TIPOS_ANEXO_BASIC', [
    'profissional' => 'Profissional',
    'folha' => 'Folhas de Ponto',
    'funcao' => 'Referente a Função',
]);

define('MES_ATUAL', date('m'));
define('MES_ANTERIOR', date('m', strtotime('-1 month')));
define('MES_PROXIMO', date('m', strtotime('+1 month')));

define('ESCOLARIDADE', [
    'Não informado',
    'Fundamental Incompleto',
    'Fundamental Completo',
    'Médio Incompleto',
    'Médio Completo',
    'Superior Incompleto',
    'Superior Completo',
    'Especialização',
    'Mestrado Incompleto',
    'Mestrado Completo',
    'Doutorado Incompleto',
    'Doutorado Completo',
]);

define('MUNICIPIOS', [
    1 => 'Rio Branco',
    2 =>  'Acrelândia',
    3 =>  'Assis Brasil',
    4 =>  'Brasiléia',
    5 =>  'Bujari',
    6 =>  'Capixaba',
    7 =>  'Cruzeiro do Sul',
    8 =>  'Epitaciolândia',
    9 =>  'Feijó',
    10 => 'Jordão',
    11 => 'Mâncio Lima',
    12 => 'Manoel Urbano',
    13 => 'Marechal Thaumaturgo',
    14 => 'Plácido de Castro',
    15 => 'Porto Acre',
    16 => 'Porto Walter',
    17 => 'Rodrigues Alves',
    18 => 'Santa Rosa do Purus',
    19 => 'Sena Madureira',
    20 => 'Senador Guiomard',
    21 => 'Tarauacá',
    22 => 'Xapuri'
]);


define('DIA_SEMANA_ABR', ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb']);



define('UF', [
    'AC' => 'AC',
    'AL' => 'AL',
    'AP' => 'AP',
    'AM' => 'AM',
    'BA' => 'BA',
    'CE' => 'CE',
    'DF' => 'DF',
    'ES' => 'ES',
    'GO' => 'GO',
    'MA' => 'MA',
    'MT' => 'MT',
    'MS' => 'MS',
    'MG' => 'MG',
    'PA' => 'PA',
    'PB' => 'PB',
    'PR' => 'PR',
    'PE' => 'PE',
    'PI' => 'PI',
    'RJ' => 'RJ',
    'RN' => 'RN',
    'RS' => 'RS',
    'RO' => 'RO',
    'RR' => 'RR',
    'SC' => 'SC',
    'SP' => 'SP',
    'SE' => 'SE',
    'TO' => 'TO',
]);

define('PAGE', [
    ['home'],
    ['usuario', 'usuariosOutraPagina'],
    ['usuario', 'usuariosModalAjax'],
    ['usuario', 'usuariosModalReload'],
]);

define('MENU', [
    'Home',
    'Usuários',
]);

define('BREADCRUMB', [
    ['Home', 'index'],
    ['Outra página', 'usuario.outra_pagina'],
    ['Modal Ajax', 'usuario'],
    ['Modal Reload', 'usuario.modal_reload'],
]);

// ________________MESSAGES____________________
define('MSG_SUCESSO', 'Operação realizada com sucesso!');
define('MSG_ERRO_REQUIRED', 'O campo :attribute é obrigatório.');
define('MSG_ERRO_AUTH', 'Credenciais inválidas.');
define('MSG_ERRO_AUTORIZATION', 'Usuário não autorizado.');
define('MSG_ERRO_VALIDATE_EMAIL', 'Formato de e-mail válido.');
define('MSG_ERRO_VALIDATE_CPF', 'Formato de CPF válido.');
define('MSG_ERRO_CPF_REQUIRED', 'O campo CPF é obrigatório.');
define('MSG_ERRO_EMAIL_REQUIRED', 'O campo e-mail é obrigatório.');
define('MSG_ERRO_NAME_REQUIRED', 'O campo nome é obrigatório.');
define('MSG_ERRO_DETE_REQUIRED', 'O campo data é obrigatório.');
define('MSG_ERRO_EMAIL_UNIQUE', 'Este e-mail já está em uso.');
define('MSG_ERRO_CPF_UNIQUE', 'Este CPF já está em uso.');
define('MSG_ERRO_NAME_MAX', 'O campo nome deve ter no máximo 255 caracteres.');
define('MSG_ERRO_EMAIL_MAX', 'O campo e-mail deve ter no máximo 255 caracteres.');
define('MSG_ERRO_VALIDADE_DATE', 'A data está inválida.');
define('MSG_ERRO_DATE_BEFORE', 'A data deve ser uma data anterior a hoje.');

//Textos úteis
define('TXT_INPUT_EMAIL', 'Digite seu e-mail');
define('TXT_INPUT_PASSWORD', 'Digite sua senha');
