$TC.name = $TC.name || 'demoblog';
var _fe_sperc = _fe_sperc || 100;
var _fe_survey_visits = _fe_survey_visits || 1;
$TC.survey_pageviews = 1;
var _fe_survey_daysbetween = _fe_survey_daysbetween || 60;
var _fe_survey_delay = _fe_survey_delay || 5;
$TC.open_semantics = 1;
$TC.survey_close = 1;
$TC.bg_color = $TC.bg_color || 'rgba(232,141,3,1)';
$TC.fexam_topline = $TC.fexam_topline || '#4d60c7';
$TC.text_color = $TC.text_color || '#ffffff';
$TC.css_rating_bg = $TC.css_rating_bg || '#656669';
$TC.css_rating_bg_hover = $TC.css_rating_bg_hover || '#5e6dbc';
$TC.css_rating_text = $TC.css_rating_text || '#ffffff';
$TC.css_font = $TC.css_font || '';
if ($TC.css_font != '') { $TC.css_font = $TC.css_font+','; }
var _fe_flt = [];

var _fe_is_content = 1;
$TC.ga = 0;
$TC.ga_customdim_index = 0;
$TC.gtm = 0;
$TC.intercom = 0;
$TC.poweredbranding = "<img src='//tag.fanexam.com/img/logo_bw.png' style='margin-top:-8px;'>";
$TC.soc_url = $TC.soc_url || "http://adprojectus.blogspot.in";
$TC.soc_intro = $TC.soc_intro || "";
var _fe_fb = 1;
var _fe_twt = 1;
var _fe_twt_account = "";
var _fe_twt_msg = "";
var _fe_lin = 0;
var _fe_lin_url = "";
var _fe_lin_title = "";
var _fe_lin_summary = "";

// BEGIN custom automated javascripts
// END custom automated javascripts

if ($TC.test && !$TC.testdelay)
	_fe_survey_delay = 0;

$TC.referrer = $TC.referrer || window.location.href;
		
if ($TC.lang.toLowerCase() == 'pt-br')
{
	if (typeof _fe_txt_question == 'undefined') {
		var _fe_txt_intro = '<strong>Adorar&iacute;amos a sua ajuda.</strong> &nbsp; S&atilde;o apenas 30 segundos do seu tempo para responder a uma pergunta simples sobre o nosso servi&ccedil;o.';
		var _fe_txt_question = 'Qual a probabilidade de voc&ecirc; recomendar <strong>'+$TC.name+'</strong> a um amigo ou colega?';
		var _fe_txt_tks_dt = '<strong>Obrigado.</strong> Voc&ecirc; poderia nos dizer o principal motivo desta nota?';
		var _fe_txt_tks_ps = _fe_txt_tks_dt;
		var _fe_txt_tks_pm = _fe_txt_tks_dt;
	}
	
	var _fe_txt_0 = 'Nem pensar'; var _fe_txt_10 = 'Com certeza'; var _fe_txt_send = 'Enviar';
	var _fe_txt_alldone = 'Obrigado ;)';  var _fe_txt_vlre = 'Por favor, conte-nos o motivo.';
	var _fe_txt_subvt = '<strong>Submetendo voto...</strong>';  var _fe_txt_subfb = '<strong>Submetendo feedback...</strong>';
	var _fe_soc_intro_fn = $TC.soc_intro || 'N&oacute;s amamos nossos clientes e grande parte deles vem do boca-a-boca.  Voc&ecirc; poderia nos ajudar divulgando o nosso servi&ccedil;o para seus amigos e colegas?  Basta clicar no &iacute;cones da(s) rede(s) social(is) abaixo:';
} else if ($TC.lang.toLowerCase() == 'fr-fr')
{
	if (typeof _fe_txt_question == 'undefined') {
		
		var _fe_txt_intro = '<strong>Nous aimerions vous demander un coup de pouce.</strong> &nbsp; Pourriez-vous, s\'il vous pla&icirc;t, prendre un moment pour nous donner votre avis sur notre site Internet?';
		var _fe_txt_question = 'Recommanderiez-vous <strong>'+$TC.name+'</strong> &agrave; vos amis ou coll&egrave;gues?';
		var _fe_txt_tks_dt = '<strong>Merci.</strong> Pouvez-vous nous indiquer la raison principale de votre r&eacute;ponse?';
		var _fe_txt_tks_ps = _fe_txt_tks_dt;
		var _fe_txt_tks_pm = _fe_txt_tks_dt;
	}
	
	var _fe_txt_0 = 'Pas du tout'; var _fe_txt_10 = 'Tout &agrave; fait'; var _fe_txt_send = '<span style="font-size:13pt;">Envoyer</span>';
	var _fe_txt_alldone = 'Merci ;)';  var _fe_txt_vlre = 'Veuillez nous indiquer cette raison.';
	var _fe_txt_subvt = '<strong>...</strong>';  var _fe_txt_subfb = '<strong>...</strong>';
	var _fe_soc_intro_fn = $TC.soc_intro || '<strong>Nous adorons nos fans et une grande partie de notre <br>activit&eacute; est issue du bouche &agrave; oreille.</strong> <br><br>Votre avis &eacute;tant positif, pourriez-vous nous aider &agrave; faire conna&icirc;tre notre entreprise? Pour cela, cliquez simplement sur les ic&ocirc;nes des r&eacute;seaux sociaux ci-dessous:';
} else if ($TC.lang.toLowerCase() == 'es-es')
{
	if (typeof _fe_txt_question == 'undefined') {
		var _fe_txt_intro = '<strong>Nos encantar&iacute;a contar con su ayuda.</strong> &nbsp; Rogamos nos conceda tan s&oacute;lo 30 segundos de su tiempo para comentar un poco nuestra sitio web.';
		var _fe_txt_question = '&iquest;Con qu&eacute; probabilidad recomendar&iacute;a <strong>'+$TC.name+'</strong> a alg&uacute;n amigo/a o compa&ntilde;ero/a de trabajo?';
		var _fe_txt_tks_dt = '<strong>Gracias.</strong> &iquest;Podr&iacute;a decirnos el motivo principal por el que nos ha dado esta puntuaci&oacute;n?';
		var _fe_txt_tks_ps = _fe_txt_tks_dt;
		var _fe_txt_tks_pm = _fe_txt_tks_dt;
	}
	
	var _fe_txt_0 = 'No es nada probable'; var _fe_txt_10 = 'Es altamente probable'; var _fe_txt_send = 'Enviar';
	var _fe_txt_alldone = 'Gracias ;)';  var _fe_txt_vlre = 'Por favor, d&iacute;ganos el motivo.';
	var _fe_txt_subvt = '<strong>...</strong>';  var _fe_txt_subfb = '<strong>...</strong>';
	var _fe_soc_intro_fn = $TC.soc_intro || '<strong>Nos encantan nuestros fans.</strong> <br><br>Adem&aacute;s, gran parte de nuestro negocio se genera gracias al boca a boca. Como nos ha dado una puntuaci&oacute;n tan buena, &iquest;podemos pedirle que nos ayude un poquito a difundir las bondades de nuestra empresa? S&oacute;lo tiene que hacer clic sobre alguno de los iconos de redes sociales a continuaci&oacute;n:';
} else if ($TC.lang.toLowerCase() == 'de-de')
{
	if (typeof _fe_txt_question == 'undefined') {
		var _fe_txt_intro = '<strong>Wir w&uuml;rden uns sehr &uuml;ber Ihre Hilfe freuen.</strong> &nbsp; Bitte schenken Sie uns 30 Sekunden Ihrer Zeit und geben Sie uns Feedback zu unserer Website.';
		var _fe_txt_question = 'Wie wahrscheinlich ist es, dass Sie <strong>'+$TC.name+'</strong> einem Freund oder Kollegen empfehlen w&uuml;rden? ';
		var _fe_txt_tks_dt = '<strong>Danke.</strong> K&ouml;nnen Sie uns den Hauptgrund daf&uuml;r mitteilen, dass Sie uns diese Bewertung gegeben haben?';
		var _fe_txt_tks_ps = _fe_txt_tks_dt;
		var _fe_txt_tks_pm = _fe_txt_tks_dt;
	}
	
	var _fe_txt_0 = 'Absolut unwahrscheinlich'; var _fe_txt_10 = 'H&ouml;chstwahrscheinlich'; var _fe_txt_send = '<span style="font-size:14pt;">Senden</span>';
	var _fe_txt_alldone = 'Danke ;)';  var _fe_txt_vlre = 'Sagen Sie uns sehr gern den Grund.';
	var _fe_txt_subvt = '<strong>...</strong>';  var _fe_txt_subfb = '<strong>...</strong>';
	var _fe_soc_intro_fn = $TC.soc_intro || '<strong>Wir lieben unsere Fans, und einen betr&auml;chtlichen Anteil unseres Umsatzes verdanken wir pers&ouml;nlichen Empfehlungen. </strong> <br><br>Da Sie uns so gut bewertet haben, m&ouml;chten wir Sie bitten, uns weiter zu empfehlen. Klicken Sie einfach unten auf das/die Symbol(e) f&uuml;r soziale Medien:';
} else if ($TC.lang.toLowerCase() == 'cs-cz')
{
	if (typeof _fe_txt_question == 'undefined') {
		var _fe_txt_intro = '<strong>Moc bychom ocenili va&#x161;i pomoc.</strong> &nbsp; V&#x115;nujte pros&iacute;m 30 vte&#x159;in<br>sv&eacute;ho &#x10D;asu na zp&#x115;tnou vazbu k na&scaron;emu webu.';
		var _fe_txt_question = 'Jak pravd&#x115;podobn&eacute; je, &#x17E;e byste doporu&#x10D;ili <strong>' + $TC.name +'</strong> p&#x159;&iacute;teli nebo kolegovi? ';
		var _fe_txt_tks_dt = '&#x158;ekli byste n&aacute;m pros&iacute;m hlavn&iacute; d&#x16F;vod, pro&#x10D; jste dali toto hodnocen&iacute;?';
		var _fe_txt_tks_ps = _fe_txt_tks_dt;
		var _fe_txt_tks_pm = _fe_txt_tks_dt;
	}
	
	var _fe_txt_0 = 'Naprosto vylou&#x10D;en&eacute;'; var _fe_txt_10 = 'Velmi pravd&#x115;podobn&eacute;'; var _fe_txt_send = '<span style="font-size:14pt;">Odeslat</span>';
	var _fe_txt_alldone = 'D&#x115;kujeme ;)';  var _fe_txt_vlre = '&#x158;ekn&#x115;te n&aacute;m d&#x16F;vod, pros&iacute;m.';
	var _fe_txt_subvt = '<strong>Odes&iacute;l&aacute;m...</strong>';  var _fe_txt_subfb = '<strong>Odes&iacute;l&aacute;m...</strong>';
	var _fe_soc_intro_fn = $TC.soc_intro || '<strong>V&aacute;&#x17E;&iacute;me si na&scaron;ich fanou&scaron;k&#x16F; a za hodn&#x115; vd&#x115;&#x10D;&iacute;me jejich doporu&#x10D;en&iacute;m.</strong> <br><br>Proto&#x17E;e jste n&aacute;s ohodnotili tak dob&#x159;e, m&#x16F;&#x17E;eme v&aacute;s po&#x17E;&aacute;dat, abyste se o n&aacute;s zm&iacute;nili? Sta&#x10D;&iacute; kliknout na ikony soci&aacute;ln&iacute;ch m&eacute;di&iacute; n&iacute;&#x17E;e:';
} else
{
	if (typeof _fe_txt_question == 'undefined') {
//		var _fe_txt_intro = '<strong>We\'d love your help.</strong> &nbsp; Please give us 30 seconds <br>of your time for feedback on our website.';
		var _fe_txt_intro = '<strong>Tell us about your experience.</strong><br>Let us know how satisfied you are with this website.';
		var _fe_txt_question = 'How likely is it that you would recommend <strong>'+$TC.name+'</strong> to a friend or colleague?';
		var _fe_txt_tks_dt = 'Could you tell us the main reason you gave us this score?';
		var _fe_txt_tks_ps = _fe_txt_tks_dt;
		var _fe_txt_tks_pm = _fe_txt_tks_dt;
	}
	
	var _fe_txt_0 = 'Not at all likely'; var _fe_txt_10 = 'Extremely likely'; var _fe_txt_send = 'Send';
	var _fe_txt_alldone = 'Thank you ;)';  var _fe_txt_vlre = 'Please do tell us the reason.';
	var _fe_txt_subvt = '<strong>Submitting vote...</strong>';  var _fe_txt_subfb = '<strong>Submitting feedback...</strong>';
	var _fe_soc_intro_fn = $TC.soc_intro || '<strong>We love our fans and much of our business comes from word of mouth.</strong> <br><br>Because you have rated us so well, may we ask you to help put the word out about our company? Simply click the social media icon(s) below:';
}

var _fe_nps_html = '<div id="fexam_nps"><div id="fexam_close" onclick="fexam_closewin();"></div>	<div id="fexam_topline"></div><div style="position:relative;float:left;width:100%;height:1px;z-index:10;background-color:#424550;"></div>';
_fe_nps_html += '<div id="fexam_nps_intro" class="fexam_bg fexam_text" style="display:blocklfloat:left;z-index:10;width:100%;padding-top:18px;padding-bottom:18px;font-size:12pt;line-height:20px;text-align:center;">'+_fe_txt_intro+'</div>';
_fe_nps_html += '<div style="position:relative;float:left;width:100%;"><div id="fexam_nps_bot" style="display:none;position:absolute;float:left;top:0px;width:100%;z-index:2;"><div class="fe_line1" style="float:left;width:100%;height:1px;background-color:'+$TC.bg_color+';opacity:0.8;"></div><div class="fe_line2" style="float:left;width:100%;height:1px;background-color:'+$TC.bg_color+';opacity:0.6;"></div><div class="fexam_bg" style="float:left;width:100%;padding-top:20px;"><div class="fexam_question fexam_text" style="float:left;padding-left:20px;padding-right:20px;font-size:22px;line-height:26px;text-align:center;">'+_fe_txt_question+'</div><div style="float:left;width:100%;padding-top:12px;padding-bottom:6px;"><div class="fexam_grade_spacer"></div><div class="fexam_grade fexam_grade_bg" onclick="fexam_rvote(0);" style="margin:left;0px;">0</div><div class="fexam_grade_spacer"></div><div class="fexam_grade fexam_grade_bg" onclick="fexam_rvote(1);">1</div><div class="fexam_grade_spacer"></div><div class="fexam_grade fexam_grade_bg" onclick="fexam_rvote(2);">2</div><div class="fexam_grade_spacer"></div><div class="fexam_grade fexam_grade_bg" onclick="fexam_rvote(3);">3</div><div class="fexam_grade_spacer"></div><div class="fexam_grade fexam_grade_bg" onclick="fexam_rvote(4);">4</div><div class="fexam_grade_spacer"></div><div class="fexam_grade fexam_grade_bg" onclick="fexam_rvote(5);">5</div><div class="fexam_grade_spacer"></div><div class="fexam_grade fexam_grade_bg" onclick="fexam_rvote(6);">6</div><div class="fexam_grade_spacer"></div><div class="fexam_grade fexam_grade_bg" onclick="fexam_rvote(7);">7</div><div class="fexam_grade_spacer"></div><div class="fexam_grade fexam_grade_bg" onclick="fexam_rvote(8);">8</div><div class="fexam_grade_spacer"></div><div class="fexam_grade fexam_grade_bg" onclick="fexam_rvote(9);">9</div><div class="fexam_grade_spacer"></div><div class="fexam_grade fexam_grade_bg" onclick="fexam_rvote(10);">10</div></div>';
_fe_nps_html += '<div id="fexam_vote0" class="fexam_text" >'+_fe_txt_0+'</div><div id="fexam_vote10" class="fexam_text">'+_fe_txt_10+'</div><div class="fexam_text" style="float:left;width:100%;padding-top:20px;padding-bottom:4px;text-align:center;"><div style="cursor:pointer;" onclick="fexam_openPopup(\'http://fanexam.com/?utm_medium=referral&utm_campaign=survey_link&utm_term='+$TC.id+'&utm_source=\'+encodeURIComponent($TC.referrer),1000,720,\'FanExam\');return false">'+$TC.poweredbranding+'</div></div></div><div class="fexam_footerwrap"><div style="float:left;width:100%;height:16px;overflow:hidden;"><div class="fexam_bg" style="float:right;height:16px;width:100%;margin-right:16px;"><div style="float:right;width:16px;height:16px;background:url(//tag.fanexam.com/img/corner.png);margin-right:-16px;"></div></div></div></div></div>';
_fe_nps_html += '<div class="fexam_bg" id="fexam_nps_open"><div class="fexam_text" style="position:relative;float:left;width:100%;font-size:16px;"><table style="margin:0px;padding:0px;"><tr><td><div class="fexam_grade_done"></div></td><td><div id="fexam_reasonopen"></div></td></tr></table></div><div style="position:relative;float:left;width:100%;margin-top:10px;"><div style="float:left;width:100%;text-align:center;box-sizing:border-box;"><textarea id="fexam_reason" name="fexam_reason"></textarea></div><div style="width:100%;text-align:center;margin-top:0px;"><div id="fe_open_msgar"><img src="//tag.fanexam.com/img/blk_tri.png" width="14" height="14"></div><span id="fe_open_msg" class="fexam_text"></span></div><div id="fexam_send" onclick="fexam_rvote_reason(jQuery(\'#fexam_reason\').val());">'+_fe_txt_send+'</div></div><div class="fexam_text" style="float:left;width:100%;text-align:center;padding-top:26px;padding-bottom:4px;"><div style="cursor:pointer;" onclick="window.open(\'http://fanexam.com/?utm_medium=referral&utm_campaign=survey_link&utm_term='+$TC.id+'&utm_source=\'+encodeURIComponent($TC.referrer), \'_blank\');">'+$TC.poweredbranding+'</div></div></div>';
_fe_nps_html += '<div id="fexam_nps_done"><div class="fexam_bg fexam_text" style="float:left;width:100%;padding-top:30px;padding-bottom:20px;text-align:center;font-size:30px;">'+_fe_txt_alldone+'</div><div id="fexam_nps_done_txt" class="fexam_bg fexam_text"></div><div class="fexam_bg fexam_text" style="float:left;width:100%;text-align:center;font-size:11pt;padding-top:30px;"><div style="cursor:pointer;" onclick="window.open(\'http://fanexam.com/?utm_medium=referral&utm_campaign=survey_link&utm_term='+$TC.id+'&utm_source=\'+encodeURIComponent($TC.referrer), \'_blank\');">'+$TC.poweredbranding+'</div></div></div>';
_fe_nps_html += '<div id="footer_line" class="fexam_footerwrap" style="display:none;overflow:hidden;"><div class="fexam_bg" style="float:right;height:16px;width:100%;margin-right:16px;"><div style="float:right;width:16px;height:16px;background:url(//tag.fanexam.com/img/corner.png);margin-right:-16px;"></div></div></div>';



var fexam_MD5 = function (string) {
    function RotateLeft(lValue, iShiftBits) {
        return (lValue<<iShiftBits) | (lValue>>>(32-iShiftBits));
    }
    function AddUnsigned(lX,lY) {
        var lX4,lY4,lX8,lY8,lResult;
        lX8 = (lX & 0x80000000);
        lY8 = (lY & 0x80000000);
        lX4 = (lX & 0x40000000);
        lY4 = (lY & 0x40000000);
        lResult = (lX & 0x3FFFFFFF)+(lY & 0x3FFFFFFF);
        if (lX4 & lY4) {
            return (lResult ^ 0x80000000 ^ lX8 ^ lY8);
        }
        if (lX4 | lY4) {
            if (lResult & 0x40000000) {
                return (lResult ^ 0xC0000000 ^ lX8 ^ lY8);
            } else {
                return (lResult ^ 0x40000000 ^ lX8 ^ lY8);
            }
        } else {
            return (lResult ^ lX8 ^ lY8);
        }
    }
    function F(x,y,z) { return (x & y) | ((~x) & z); }
    function G(x,y,z) { return (x & z) | (y & (~z)); }
    function H(x,y,z) { return (x ^ y ^ z); }
    function I(x,y,z) { return (y ^ (x | (~z))); }
    function FF(a,b,c,d,x,s,ac) {
        a = AddUnsigned(a, AddUnsigned(AddUnsigned(F(b, c, d), x), ac));
        return AddUnsigned(RotateLeft(a, s), b);
    };
    function GG(a,b,c,d,x,s,ac) {
        a = AddUnsigned(a, AddUnsigned(AddUnsigned(G(b, c, d), x), ac));
        return AddUnsigned(RotateLeft(a, s), b);
    };
    function HH(a,b,c,d,x,s,ac) {
        a = AddUnsigned(a, AddUnsigned(AddUnsigned(H(b, c, d), x), ac));
        return AddUnsigned(RotateLeft(a, s), b);
    };
    function II(a,b,c,d,x,s,ac) {
        a = AddUnsigned(a, AddUnsigned(AddUnsigned(I(b, c, d), x), ac));
        return AddUnsigned(RotateLeft(a, s), b);
    };
    function ConvertToWordArray(string) {
        var lWordCount;
        var lMessageLength = string.length;
        var lNumberOfWords_temp1=lMessageLength + 8;
        var lNumberOfWords_temp2=(lNumberOfWords_temp1-(lNumberOfWords_temp1 % 64))/64;
        var lNumberOfWords = (lNumberOfWords_temp2+1)*16;
        var lWordArray=Array(lNumberOfWords-1);
        var lBytePosition = 0;
        var lByteCount = 0;
        while ( lByteCount < lMessageLength ) {
            lWordCount = (lByteCount-(lByteCount % 4))/4;
            lBytePosition = (lByteCount % 4)*8;
            lWordArray[lWordCount] = (lWordArray[lWordCount] | (string.charCodeAt(lByteCount)<<lBytePosition));
            lByteCount++;
        }
        lWordCount = (lByteCount-(lByteCount % 4))/4;
        lBytePosition = (lByteCount % 4)*8;
        lWordArray[lWordCount] = lWordArray[lWordCount] | (0x80<<lBytePosition);
        lWordArray[lNumberOfWords-2] = lMessageLength<<3;
        lWordArray[lNumberOfWords-1] = lMessageLength>>>29;
        return lWordArray;
    };
    function WordToHex(lValue) {
        var WordToHexValue="",WordToHexValue_temp="",lByte,lCount;
        for (lCount = 0;lCount<=3;lCount++) {
            lByte = (lValue>>>(lCount*8)) & 255;
            WordToHexValue_temp = "0" + lByte.toString(16);
            WordToHexValue = WordToHexValue + WordToHexValue_temp.substr(WordToHexValue_temp.length-2,2);
        }
        return WordToHexValue;
    };
    function Utf8Encode(string) {
        string = string.replace(/\r\n/g,"\n");
        var utftext = "";
        for (var n = 0; n < string.length; n++) {
            var c = string.charCodeAt(n);
            if (c < 128) {
                utftext += String.fromCharCode(c);
            }
            else if((c > 127) && (c < 2048)) {
                utftext += String.fromCharCode((c >> 6) | 192);
                utftext += String.fromCharCode((c & 63) | 128);
            }
            else {
                utftext += String.fromCharCode((c >> 12) | 224);
                utftext += String.fromCharCode(((c >> 6) & 63) | 128);
                utftext += String.fromCharCode((c & 63) | 128);
            }
        }
        return utftext;
    };
    var x=Array();
    var k,AA,BB,CC,DD,a,b,c,d;var S11=7, S12=12, S13=17, S14=22;var S21=5, S22=9 , S23=14, S24=20;var S31=4, S32=11, S33=16, S34=23;var S41=6, S42=10, S43=15, S44=21;string = Utf8Encode(string);x = ConvertToWordArray(string);a = 0x67452301; b = 0xEFCDAB89; c = 0x98BADCFE; d = 0x10325476;
    for (k=0;k<x.length;k+=16) {
        AA=a; BB=b; CC=c; DD=d;
        a=FF(a,b,c,d,x[k+0], S11,0xD76AA478);d=FF(d,a,b,c,x[k+1], S12,0xE8C7B756);c=FF(c,d,a,b,x[k+2], S13,0x242070DB);b=FF(b,c,d,a,x[k+3], S14,0xC1BDCEEE);a=FF(a,b,c,d,x[k+4], S11,0xF57C0FAF);d=FF(d,a,b,c,x[k+5], S12,0x4787C62A);c=FF(c,d,a,b,x[k+6], S13,0xA8304613);
        b=FF(b,c,d,a,x[k+7], S14,0xFD469501);a=FF(a,b,c,d,x[k+8], S11,0x698098D8);d=FF(d,a,b,c,x[k+9], S12,0x8B44F7AF);c=FF(c,d,a,b,x[k+10],S13,0xFFFF5BB1);b=FF(b,c,d,a,x[k+11],S14,0x895CD7BE);a=FF(a,b,c,d,x[k+12],S11,0x6B901122);d=FF(d,a,b,c,x[k+13],S12,0xFD987193);
        c=FF(c,d,a,b,x[k+14],S13,0xA679438E);b=FF(b,c,d,a,x[k+15],S14,0x49B40821);a=GG(a,b,c,d,x[k+1], S21,0xF61E2562);d=GG(d,a,b,c,x[k+6], S22,0xC040B340);c=GG(c,d,a,b,x[k+11],S23,0x265E5A51);b=GG(b,c,d,a,x[k+0], S24,0xE9B6C7AA);a=GG(a,b,c,d,x[k+5], S21,0xD62F105D);       
        d=GG(d,a,b,c,x[k+10],S22,0x2441453);c=GG(c,d,a,b,x[k+15],S23,0xD8A1E681);b=GG(b,c,d,a,x[k+4], S24,0xE7D3FBC8);a=GG(a,b,c,d,x[k+9], S21,0x21E1CDE6);d=GG(d,a,b,c,x[k+14],S22,0xC33707D6);c=GG(c,d,a,b,x[k+3], S23,0xF4D50D87);b=GG(b,c,d,a,x[k+8], S24,0x455A14ED);
        a=GG(a,b,c,d,x[k+13],S21,0xA9E3E905);d=GG(d,a,b,c,x[k+2], S22,0xFCEFA3F8);c=GG(c,d,a,b,x[k+7], S23,0x676F02D9);b=GG(b,c,d,a,x[k+12],S24,0x8D2A4C8A);a=HH(a,b,c,d,x[k+5], S31,0xFFFA3942);d=HH(d,a,b,c,x[k+8], S32,0x8771F681);c=HH(c,d,a,b,x[k+11],S33,0x6D9D6122);
        b=HH(b,c,d,a,x[k+14],S34,0xFDE5380C);a=HH(a,b,c,d,x[k+1], S31,0xA4BEEA44);d=HH(d,a,b,c,x[k+4], S32,0x4BDECFA9);c=HH(c,d,a,b,x[k+7], S33,0xF6BB4B60);b=HH(b,c,d,a,x[k+10],S34,0xBEBFBC70);a=HH(a,b,c,d,x[k+13],S31,0x289B7EC6);d=HH(d,a,b,c,x[k+0], S32,0xEAA127FA);
        c=HH(c,d,a,b,x[k+3], S33,0xD4EF3085);b=HH(b,c,d,a,x[k+6], S34,0x4881D05);a=HH(a,b,c,d,x[k+9], S31,0xD9D4D039);d=HH(d,a,b,c,x[k+12],S32,0xE6DB99E5);c=HH(c,d,a,b,x[k+15],S33,0x1FA27CF8);b=HH(b,c,d,a,x[k+2], S34,0xC4AC5665);a=II(a,b,c,d,x[k+0], S41,0xF4292244);
        d=II(d,a,b,c,x[k+7], S42,0x432AFF97);c=II(c,d,a,b,x[k+14],S43,0xAB9423A7);b=II(b,c,d,a,x[k+5], S44,0xFC93A039);a=II(a,b,c,d,x[k+12],S41,0x655B59C3);d=II(d,a,b,c,x[k+3], S42,0x8F0CCC92);c=II(c,d,a,b,x[k+10],S43,0xFFEFF47D);b=II(b,c,d,a,x[k+1], S44,0x85845DD1);
        a=II(a,b,c,d,x[k+8], S41,0x6FA87E4F);d=II(d,a,b,c,x[k+15],S42,0xFE2CE6E0);c=II(c,d,a,b,x[k+6], S43,0xA3014314);b=II(b,c,d,a,x[k+13],S44,0x4E0811A1);a=II(a,b,c,d,x[k+4], S41,0xF7537E82);d=II(d,a,b,c,x[k+11],S42,0xBD3AF235);c=II(c,d,a,b,x[k+2], S43,0x2AD7D2BB);b=II(b,c,d,a,x[k+9], S44,0xEB86D391);
        a=AddUnsigned(a,AA);b=AddUnsigned(b,BB);c=AddUnsigned(c,CC);d=AddUnsigned(d,DD);
    }
    var temp = WordToHex(a)+WordToHex(b)+WordToHex(c)+WordToHex(d);
    return temp.toLowerCase();
}

function fexam_randomString(length, chars) {
    var result = '';
    for (var i = length; i > 0; --i) result += chars[Math.round(Math.random() * (chars.length - 1))];
    return result;
}

function fexam_openPopup(url, width, height, title){
	if (typeof Wix != "undefined")
	{
		var w = width;
		var h = height;
		var left = (window.screen.width/2)-(w/2);
		var top = (window.screen.height/2)-(h/2);
		
		var win = window.open(url, "_blank", 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
		if (win.moveTo) win.moveTo(left,top);
		win.focus();
	} else
	{
		window.open(url, '_blank');
	}
	
}	


/*!
 * JavaScript Cookie v2.0.3
 * https://github.com/js-cookie/js-cookie
 *
 * Copyright 2006, 2015 Klaus Hartl & Fagner Brack
 * Released under the MIT license
 */
(function (factory) {
		var _OldCookies = window.Cookies;
		var api = window.Cookies = factory();
		api.noConflict = function () {
			window.Cookies = _OldCookies;
			return api;
		};
	
}(function () {
	function extend () {
		var i = 0;
		var result = {};
		for (var j = arguments.length; i < j; i++) {
			var attributes = arguments[ i ];
			for (var key in attributes) {
				result[key] = attributes[key];
			}
		}
		return result;
	}

	function init (converter) {
		function api (key, value, attributes) {
			var result;

			// Write

			if (arguments.length > 1) {
				attributes = extend({
					path: '/'
				}, api.defaults, attributes);

				if (typeof attributes.expires === 'number') {
					var expires = new Date();
					expires.setMilliseconds(expires.getMilliseconds() + attributes.expires * 864e+5);
					attributes.expires = expires;
				}

				try {
					result = JSON.stringify(value);
					if (/^[\{\[]/.test(result)) {
						value = result;
					}
				} catch (e) {}

				value = encodeURIComponent(String(value));
				value = value.replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g, decodeURIComponent);

				key = encodeURIComponent(String(key));
				key = key.replace(/%(23|24|26|2B|5E|60|7C)/g, decodeURIComponent);
				key = key.replace(/[\(\)]/g, escape);

				return (document.cookie = [
					key, '=', value,
					attributes.expires && '; expires=' + attributes.expires.toUTCString(), // use expires attribute, max-age is not supported by IE
					attributes.path    && '; path=' + attributes.path,
					attributes.domain  && '; domain=' + attributes.domain,
					attributes.secure ? '; secure' : ''
				].join(''));
			}

			// Read

			if (!key) {
				result = {};
			}

			// To prevent the for loop in the first place assign an empty array
			// in case there are no cookies at all. Also prevents odd result when
			// calling "get()"
			var cookies = document.cookie ? document.cookie.split('; ') : [];
			var rdecode = /(%[0-9A-Z]{2})+/g;
			var i = 0;

			for (; i < cookies.length; i++) {
				var parts = cookies[i].split('=');
				var name = parts[0].replace(rdecode, decodeURIComponent);
				var cookie = parts.slice(1).join('=');

				if (cookie.charAt(0) === '"') {
					cookie = cookie.slice(1, -1);
				}

				try {
					cookie = converter && converter(cookie, name) || cookie.replace(rdecode, decodeURIComponent);

					if (this.json) {
						try {
							cookie = JSON.parse(cookie);
						} catch (e) {}
					}

					if (key === name) {
						result = cookie;
						break;
					}

					if (!key) {
						result[name] = cookie;
					}
				} catch (e) {}
			}

			return result;
		}

		api.get = api.set = api;
		api.getJSON = function () {
			return api.apply({
				json: true
			}, [].slice.call(arguments));
		};
		api.defaults = {};

		api.remove = function (key, attributes) {
			api(key, '', extend(attributes, {
				expires: -1
			}));
		};

		api.withConverter = init;

		return api;
	}

	return init();
}));

var fe_cookies = Cookies.noConflict();


function fexam_closewin()
{
	jQuery('#fexam_nps').fadeOut();	
	if (typeof Wix != "undefined")
	{
		Wix.resizeWindow(1,1);		
	}
}

function fexam_rvote(theVote)
{
	$TC.cust_type = '';
	$TC.rating = theVote;
	jQuery('#fexam_nps_intro').hide();
	jQuery('#fexam_nps_bot').hide();
	jQuery('#fexam_nps_open').fadeIn('slow');
	jQuery('#footer_line').fadeIn('slow');

	$TC.react_email = $TC.email;
	if ($TC.react_email == '_fe_content')
		$TC.react_email = '';
	
	if (theVote <= 6)
	{
		jQuery('#fexam_reasonopen').html(_fe_txt_tks_dt);
		$TC.cust_type = 'Detractor';
		if (typeof fexam_rating_detractor == 'function') { 
  			fexam_rating_detractor($TC.cust_type,theVote,$TC.react_email); 
		}
	} else if (theVote <= 8)
	{
		jQuery('#fexam_reasonopen').html(_fe_txt_tks_ps);
		$TC.cust_type = 'Passive';
		if (typeof fexam_rating_passive == 'function') { 
  			fexam_rating_passive($TC.cust_type,theVote,$TC.react_email); 
		}
	} else
	{
		jQuery('#fexam_reasonopen').html(_fe_txt_tks_pm);
		$TC.cust_type = 'Promoter';
		if (typeof fexam_rating_promoter == 'function') { 
  			fexam_rating_promoter($TC.cust_type,theVote,$TC.react_email); 
		}
	}
	if (typeof fexam_rating_all == 'function') { 
			fexam_rating_all($TC.cust_type,theVote,$TC.react_email); 
	}
	
	
	jQuery('#fexam_close').fadeIn('slow');
	jQuery('.fexam_grade_done').text(theVote);
	jQuery('#fexam_reason').focus();
	fexam_validate_open($TC.lang.toLowerCase());
	if (!$TC.test)
	{
		var request = jQuery.ajax({
			url: "https://tag.fanexam.com/nps_vote",
			type: "GET",
			data: {action:1, vote:theVote, uid:$TC.uid, cid:$TC.id, pkey:$TC.email, hash:_fe_uid, numvisit:fe_cookies.get('_fev'+$TC.id), tags:$TC.tags, url:$TC.referrer},
			dataType: "html",
			xhrFields: {
	    		withCredentials: false
	    	}
		});
		fe_cookies.set('_fec'+$TC.id, '1', { expires: _fe_survey_daysbetween, path: '/' });
		
		if ($TC.ga == 1 && typeof ga != "undefined")
		{
			if ($TC.ga_customdim_index >= 1)
			{
				ga('set', 'dimension'+$TC.ga_customdim_index, theVote);
			}
			ga('send', 'event', 'NPS_FanExam', theVote, $TC.cust_type, {'nonInteraction': 1});	
		}
		if ($TC.gtm == 1)
		{
			if (typeof dataLayer != "undefined")
			{
				dataLayer.push({ 'event': 'NPS_FanExam', 'NPS_FanExam': { 'Rating' : theVote.toString(), 'Customer_Type' : $TC.cust_type }}); 
			} else
			{
				dataLayer = ({ 'event': 'NPS_FanExam', 'NPS_FanExam': { 'Rating' : theVote.toString(), 'Customer_Type' : $TC.cust_type }}); 
			}
		}
		if ($TC.intercom == 1 && typeof Intercom != "undefined")
		{
			var metadata = {
		  		nps_score: theVote,
		  		nps_category: $TC.cust_type
			};
			Intercom('trackUserEvent', 'Rated-NPS-FanExam', metadata);
			Intercom('update', {"NPS_FanExam": $TC.cust_type});			
		}
	}
}

function fexam_rvote_reason(theReason)
{
	if(jQuery('#fexam_reason').val().trim() == '')
	{
		jQuery('#fe_open_msg').html('<strong>'+_fe_txt_vlre+'</strong>').fadeIn('fast');
	    jQuery('#fe_open_msgar').fadeIn('fast');
		jQuery('#fexam_reason').focus();
		return false;
	} else 
	{
		if (!$TC.test)
		{
			var request_reason = jQuery.ajax({
				url: "https://tag.fanexam.com/nps_vote",
				type: "GET",
				data: {action:2, uid:$TC.uid, cid:$TC.id, pkey:$TC.email, hash:_fe_uid, numvisit:fe_cookies.get('_fev'+$TC.id), tags:$TC.tags, vote:$TC.rating, reason:theReason, url:$TC.referrer},
				dataType: "html",
				xhrFields: {
		    		withCredentials: false
		    	}
			});
			fe_cookies.set('_fec'+$TC.id, '2', { expires: _fe_survey_daysbetween, path: '/' });
		}
	
		jQuery('#fexam_nps_open').hide();
		jQuery('#fexam_nps_done').fadeIn('slow');
		
		var _fe_show_sm = 0;
		if ($TC.rating >= 9 && (_fe_fb == 1 || _fe_twt == 1 || _fe_lin == 1 )) 
		{
			jQuery('#fexam_nps_done_txt').before('<div class="fe_line1" style="float:left;width:100%;height:1px;background-color:'+$TC.bg_color+';opacity:0.8;"></div><div class="fe_line2" style="float:left;width:100%;height:1px;background-color:'+$TC.bg_color+';opacity:0.6;"></div>');
			jQuery('#fexam_nps_done_txt').show().append('<div style="font-size:12pt;padding-right:20px;padding-left:20px;">' + _fe_soc_intro_fn +'<br><br></div>');

			if (_fe_fb == 1)		
			{
				jQuery('#fexam_nps_done_txt').append('&nbsp;&nbsp;<a href="#" onclick="var win_fb=window.open(\'https://www.facebook.com/sharer/sharer.php?display=popup&u=' + encodeURI($TC.soc_url) + '&redirect_uri=https%3A%2F%2Ffanexam.com%2Fbe_facebook\',\'_blank\',\'scrollbars=yes,resizable=yes,copyhistory=yes,width=520,height=570,top=100,left=100\');win_fb.focus();"><img src="//tag.fanexam.com/img/facebook.png" width="81" border="0" style="margin-top:-12px;"></a>');

				_fe_show_sm = 1;
			} 
			if (_fe_twt == 1)		
			{
				window.twttr=(function(d,s,id){var t,js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return}js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);return window.twttr||(t={_e:[],ready:function(f){t._e.push(f)}})}(document,"script","twitter-wjs"));
				jQuery('#fexam_nps_done_txt').append('&nbsp;&nbsp;<a class="twitter-share-button" href="https://twitter.com/share" data-count="none" data-size="large" data-text="' + _fe_twt_msg + '" data-related="' + _fe_twt_account + '" data-url="' + $TC.soc_url + '">Tweet</a>');
				_fe_show_sm = 1;
			} 
			if (_fe_lin == 1)		
			{
				jQuery('#fexam_nps_done_txt').append('&nbsp;&nbsp;<a href="#" onclick="var win_lin=window.open(\'https://www.linkedin.com/shareArticle?title=' + _fe_lin_title + '&summary=' + _fe_lin_summary + '&mini=true&url=' + encodeURI($TC.soc_url) + '\',\'_blank\',\'scrollbars=yes,resizable=yes,copyhistory=yes,width=520,height=570,top=100,left=100\');win_lin.focus();"><img src="//tag.fanexam.com/img/linkedin.png" width="81" border="0" style="margin-top:-12px;"></a>');
				_fe_show_sm = 1;
			} 
		} 
		
		if (_fe_show_sm == 0)		
		{
			setTimeout('jQuery("#fexam_nps").fadeOut("slow");fexam_closewin();', 2500);
		}
		
		if ($TC.rating <= 6)
			$TC.cust_type = 'Detractor';
		else if ($TC.rating <= 8)
			$TC.cust_type = 'Passive';
		else
			$TC.cust_type = 'Promoter';
		
		$TC.react_email = $TC.email;
		if ($TC.react_email == '_fe_content')
			$TC.react_email = '';
		if ($TC.rating <= 6)
		{
			if (typeof fexam_openfeedback_detractor == 'function') { 
	  			fexam_openfeedback_detractor($TC.cust_type,$TC.rating,$TC.react_email,theReason); 
			}
		} else if ($TC.rating <= 8)
		{
			if (typeof fexam_openfeedback_passive == 'function') { 
	  			fexam_openfeedback_passive($TC.cust_type,$TC.rating,$TC.react_email,theReason); 
			}
		} else
		{
			if (typeof fexam_openfeedback_promoter == 'function') { 
	  			fexam_openfeedback_promoter($TC.cust_type,$TC.rating,$TC.react_email,theReason); 
			}
		}		
		if (typeof fexam_openfeedback_all == 'function') { 
  			fexam_openfeedback_all($TC.cust_type,$TC.rating,$TC.react_email,theReason); 
		}
		
		
	}	
}

function fexam_begin(theString)
{
	if (jQuery('#fexam_reason').val().toLowerCase().trim() == theString || jQuery('#fexam_reason').val().toLowerCase().trim().replace(/[^\w\s]/gi, '') == theString)
	{
		return true;
	}
}

function fexam_in(theString)
{
	if (jQuery('#fexam_reason').val().toLowerCase().trim().indexOf(theString) > 0)
	{
		return true;
	}
}

function fexam_validate_open(lang)
{
	var _fe_maxLength = 20;

	if (lang == 'en-us' && $TC.open_semantics == 1)
	{
		var _fe_checkLength = function() 
		{
		    if (fexam_begin('great service') || fexam_begin('great product') || fexam_begin('excellent product'))
		    {
			    jQuery('#fe_open_msg').html('May we please ask you to elaborate why we have a <strong>'+jQuery('#fexam_reason').val().trim()+'</strong>?').fadeIn('fast');
			    jQuery('#fe_open_msgar').fadeIn('fast');
		    } else if (fexam_begin('excellent') || fexam_begin('great') || fexam_begin('good') || fexam_begin('perfect') || fexam_begin('very good') || fexam_begin('crap') || fexam_begin('terrible') || fexam_begin('nice') || fexam_begin(':)') || fexam_begin(':-)') || fexam_begin('ok') || fexam_begin('cool') || fexam_begin('easy') || fexam_begin('cheap') || fexam_begin('expensive')  || fexam_begin('amazing') )
		    {
			    jQuery('#fe_open_msg').html('May we please ask you to elaborate why you think we are <strong>'+jQuery('#fexam_reason').val().trim()+'</strong>?').fadeIn('fast');
			    jQuery('#fe_open_msgar').fadeIn('fast');
		    } else if (fexam_begin('not happy') || fexam_begin('unhappy') || fexam_begin('angry') || fexam_begin('pissed off') || fexam_begin('pleased'))
		    {
			    jQuery('#fe_open_msg').html('May we please ask you to elaborate why you are <strong>'+jQuery('#fexam_reason').val().trim()+'</strong>?').fadeIn('fast');
			    jQuery('#fe_open_msgar').fadeIn('fast');
		    } else if (fexam_begin('nice features') || fexam_begin('cool features') || fexam_begin('great features'))
		    {
			    jQuery('#fe_open_msg').html('May we please ask you to elaborate on which is your <strong>favorite feature</strong>?').fadeIn('fast');
			    jQuery('#fe_open_msgar').fadeIn('fast');
		    } else if (fexam_begin('price') || fexam_begin('pricing'))
		    {
			    jQuery('#fe_open_msg').html('May we please ask you to elaborate on why you gave us this rating on our <strong>pricing</strong>?').fadeIn('fast');
			    jQuery('#fe_open_msgar').fadeIn('fast');
		    } else if (fexam_in('bug'))
		    {
			    jQuery('#fe_open_msg').html('Yikes, we also hate <strong>bugs</strong>.  Could you tell us a little more about this one?').fadeIn('fast');
			    jQuery('#fe_open_msgar').fadeIn('fast');
		    } else if (fexam_begin('helped me out'))
		    {
			    jQuery('#fe_open_msg').html('May we please ask you to elaborate on how we <strong>helped you out</strong>?').fadeIn('fast');
			    jQuery('#fe_open_msgar').fadeIn('fast');
		    } else if (jQuery('#fexam_reason').val().match(/^\d+$/)) 
		    {
			    if (parseInt(jQuery('#fexam_reason').val()) >= 0 && parseInt(jQuery('#fexam_reason').val()) <=10)
			    {
				    jQuery('#fe_open_msg').html('Thank you again for your score - but please do elaborate on why you gave it to us.').fadeIn('fast');
				    jQuery('#fe_open_msgar').fadeIn('fast');
	        	}
	    	} else if (jQuery('#fexam_reason').val().length > 8 && jQuery('#fexam_reason').val().length < _fe_maxLength) 
		    {
			    jQuery('#fe_open_msg').html('Please do give us as much feedback as possible.').fadeIn('fast');
			    jQuery('#fe_open_msgar').fadeIn('fast');
		    } else if (jQuery('#fexam_reason').val().length > 0 && jQuery('#fe_open_msg').html() != '')
		    {
			    jQuery('#fe_open_msg').fadeOut(50).html('');
			    jQuery('#fe_open_msgar').fadeOut('fast');
		    }
		}
	} else if (lang == 'pt-br' && $TC.open_semantics == 1)
	{ 
		var _fe_checkLength = function() 
		{
		    if (fexam_begin('excelente') || fexam_begin('bom') || fexam_begin('muito bom') || fexam_begin('demais') || fexam_begin('otimo') || fexam_begin('timo') || fexam_begin(':)') || fexam_begin(':-)') || fexam_begin('ok') || fexam_begin('legal') || fexam_begin('facil') || fexam_begin('fcil') || fexam_begin('show') || fexam_begin('top')  || fexam_begin('barato')  || fexam_begin('muito barato')  || fexam_begin('caro')  || fexam_begin('muito caro') )
		    {
			    jQuery('#fe_open_msg').html('Poderia nos dizer em mais detalhes por que achou nosso servi&ccedil;o <strong>'+jQuery('#fexam_reason').val().trim()+'</strong>?').fadeIn('fast');
			    jQuery('#fe_open_msgar').fadeIn('fast');
		    } else if (fexam_begin('adorei') || fexam_begin('adoro') || fexam_begin('gosto') || fexam_begin('gostei') || fexam_begin('amei') )
		    {
			    jQuery('#fe_open_msg').html('Poderia nos dizer em mais detalhes por que voc&ecirc; gostou do nosso servi&ccedil;o?').fadeIn('fast');
			    jQuery('#fe_open_msgar').fadeIn('fast');
		    } else if (fexam_begin('falta muito recursos') || fexam_begin('faltam muito recursos') || fexam_begin('faltam muitos recursos') || fexam_begin('falta recursos') || fexam_begin('faltam recursos') )
		    {
			    jQuery('#fe_open_msg').html('Poderia nos dizer que <strong>recursos</strong> faltam?').fadeIn('fast');
			    jQuery('#fe_open_msgar').fadeIn('fast');
		    } else if (fexam_begin('preo') || fexam_begin('preco') )
		    {
			    jQuery('#fe_open_msg').html('Poderia nos dizer por que nos deu essa nota sobre o <strong>pre&ccedil;o</strong> do nosso servi&ccedil;o?').fadeIn('fast');
			    jQuery('#fe_open_msgar').fadeIn('fast');
		    } else if (jQuery('#fexam_reason').val().match(/^\d+$/)) 
		    {
			    if (parseInt(jQuery('#fexam_reason').val()) >= 0 && parseInt(jQuery('#fexam_reason').val()) <=10)
			    {
				    jQuery('#fe_open_msg').html('Obrigado pela resposta - agora nos diga, por favor, porque elegeu nos dar esta nota.').fadeIn('fast');
				    jQuery('#fe_open_msgar').fadeIn('fast');
	        	}
	    	} else if (jQuery('#fexam_reason').val().length > 8 && jQuery('#fexam_reason').val().length < _fe_maxLength) 
		    {
			    jQuery('#fe_open_msg').html('Por favor, nos informe o m&aacute;ximo poss&iacute;vel sobre a raz&atilde;o da sua nota.').fadeIn('fast');
			    jQuery('#fe_open_msgar').fadeIn('fast');
		    } else if (jQuery('#fexam_reason').val().length > 0 && jQuery('#fe_open_msg').html() != '')
		    {
			    jQuery('#fe_open_msg').fadeOut(50).html('');
			    jQuery('#fe_open_msgar').fadeOut('fast');
		    }
		}
	}
	setInterval(_fe_checkLength, 300);
}

function fexam_show_nps()
{
	if (jQuery(window).width() < 610)	
		$TC.sphone = $TC.sphone || 1;
	else
		$TC.sphone = $TC.sphone || 2;
		
	var _fe_nps_style = '<style>#fexam_topline{position:relative;float:left;width:100%;height:5px;z-index:10;}  #fexam_nps_done{display:none;float:left;width:100%;}  #fexam_nps_done_txt{display:none;float:left;width:100%;text-align:center;font-size:30px;padding-top:20px;}';
	if ($TC.sphone == 1)
	{
		_fe_nps_style += '#fexam_nps_intro{position:relative;float:left;width:100%;}  .fexam_grade{float:left;width:8%;height:30px;font-size:20px;border-radius:4px;text-align:center;line-height:32px;font-weight:bold;cursor:pointer;}  .fexam_grade_spacer{float:left;width:1%;height:30px;}  #fexam_vote0{float:left;text-align:left;font-size:11pt;margin-left:1%;}  #fexam_vote10{float:right;text-align:right;font-size:11pt;margin-right:1%;}  .fexam_grade_done{float:left;margin-top:-8px;width:40px;height:40px;font-size:22px;border-radius:50%;text-align:center;line-height:40px;margin-left:16px;font-weight:bold;}';
		_fe_nps_style += '.fexam_footerwrap{float:left;width:0px;height:0px;overflow:hidden;}  #fe_open_msgar{display:none;float:left;width:0px;height:0px;overflow:hidden;}  #fe_open_msg{display:none;background-color:#000000;height:20px;font-size:11px;padding:6px;padding-left:24px;padding-right:24px;}  #fexam_close{display:none;position:absolute;top:7px;right:6px;width:14px;height:14px;z-index:11;background:url(//tag.fanexam.com/img/x.png) no-repeat;cursor:pointer;background-size: 14px 14px;}  #fexam_send{position:absolute;top:51px;right:5%;color:#5564B8;font-size:16pt;font-weight:bold;cursor:pointer;}  #fexam_reason {width:90%;height:60px;font-size:13px;color:#000000;padding:10px;border:1px solid #efefef;box-sizing:content-box;resize:none;word-wrap:break-word;}  #fexam_reasonopen {float:left;margin-left:8px;text-align:left;}  #fexam_nps_open {display:none;width:100%;float:left;padding:4px;padding-bottom:0px;padding-top:12px;}  #fexam_nps{position:fixed;z-index:999999999;top:-500px;left:0%;margin-left:0px;width:100%;}';
	} else
	{
		_fe_nps_style += '#fexam_nps_intro{position:relative;float:left;width:100%;padding-left:10px;padding-right:10px;box-sizing:border-box;}  .fexam_grade{float:left;width:43px;height:43px;font-size:22px;border-radius:50%;text-align:center;line-height:43px;font-weight:bold;cursor:pointer;}  .fexam_grade_spacer{float:left;width:10px;height:43px;}  #fexam_vote0{float:left;text-align:left;font-size:11pt;margin-left:20px;}  #fexam_vote10{float:right;text-align:right;font-size:11pt;margin-right:20px;}  .fexam_grade_done{float:left;margin-top:-8px;width:40px;height:40px;font-size:22px;border-radius:50%;text-align:center;line-height:40px;margin-left:16px;margin-right:16px;font-weight:bold;}';
		_fe_nps_style += '.fexam_footerwrap{float:left;width:100%;height:16px;}  #fe_open_msgar{display:none;float:left;width:100%;text-align:center;margin-top:-13px;line-height:12px;}  #fe_open_msg{display:none;background-color:#000000;height:20px;font-size:13px;padding:6px;padding-left:24px;padding-right:24px;}  #fexam_close{display:none;position:absolute;top:16px;right:6px;width:20px;height:20px;z-index:11;background:url(//tag.fanexam.com/img/x.png) no-repeat;cursor:pointer;}  #fexam_send{position:absolute;top:96px;right:26px;color:#5564B8;font-size:16pt;font-weight:bold;cursor:pointer;}  #fexam_reason {width:450px;height:88px;font-size:13px;color:#000000;padding:18px 60px 18px 18px;border:1px solid #efefef;box-sizing:content-box;resize:none;word-wrap:break-word;}  #fexam_reasonopen {float:left;margin-left:8px;text-align:left;width:460px}  #fexam_nps_open {display:none;width:100%;float:left;padding:20px;padding-bottom:0px;box-sizing:border-box;}  #fexam_nps{position:fixed;z-index:999999999;top:-500px;left:50%;margin-left:-302px;width:605px;}';
	}

	if (typeof Wix == "undefined" || $TC.wix_dfcolors == 1)
	{
		_fe_nps_style += '#fe_open_msg {font-family:'+$TC.css_font+'Helvetica,Arial,sans;}  #fexam_nps{font-family:'+$TC.css_font+'Helvetica,Arial,sans;}  .fexam_text{color:'+$TC.text_color+';}  #fexam_reasonopen {color:'+$TC.text_color+';}  .fexam_bg{background-color:'+$TC.bg_color+';}  #fexam_topline{background-color:'+$TC.fexam_topline+';}  .fexam_grade_done{background-color:'+$TC.css_rating_bg+';color:'+$TC.css_rating_text+';}  .fexam_grade_bg{background-color:'+$TC.css_rating_bg+';color:'+$TC.css_rating_text+';}  .fexam_grade:hover{background-color:'+$TC.css_rating_bg_hover+';}  .fexam_question{font-family:'+$TC.css_font+'Helvetica,Arial,sans;}';
	}
	_fe_nps_style += '</style>';
			
		
	if ($TC.test)
	{
		jQuery('head').append(_fe_nps_style);
		jQuery('body').append(_fe_nps_html);
		
		if (typeof Wix != "undefined")
		{	
			if ($TC.noanimation)
				Wix.resizeWindow(670,385);
			else
				setTimeout('Wix.resizeWindow(670,385);', _fe_survey_delay*1000);
		}

		if ($TC.noanimation)
		{
			jQuery("#fexam_nps").css('top','0px');
			jQuery("#fexam_nps_bot").show();
		} else
		{
			setTimeout('jQuery("#fexam_nps").animate({top:"+=500"}, 2000, function() {});', _fe_survey_delay*1000);
			setTimeout('jQuery("#fexam_nps_bot").fadeIn();', _fe_survey_delay*1000+3000);
		}
		if ($TC.survey_close == 1)
		{
			jQuery('#fexam_close').show();
		}
	} else
	{
		_fe_uid = '';
		if (_fe_is_content == 1)
		{
			if (!fe_cookies.get('_feu'+$TC.id))
			{
				_fe_uid = Math.round(new Date().getTime()*Math.random()).toString();
				fe_cookies.set('_feu'+$TC.id, _fe_uid, { expires: 365, path: '/' });
			}  else
			{
				_fe_uid = fe_cookies.get('_feu'+$TC.id);
			}
			$TC.email = '_fe_content';
		}
		
		if ($TC.email == '' && _fe_is_content != 1)
		{
			var request_show = jQuery.ajax({
				url: "https://tag.fanexam.com/nps_show",
				type: "GET",
				data: {action:1, uid:$TC.uid, cid:$TC.id, pkey:'', hash:_fe_uid, numvisit:fe_cookies.get('_fev'+$TC.id), tags:$TC.tags, url:$TC.referrer},
				dataType: "html",
				xhrFields: {
		    		withCredentials: false
		    	}
			});
			fe_cookies.set('_fes'+$TC.id, '1', { path: '/' });
		} else {
			jQuery(document).ready(function () {
				
				$TC.vs_count = 0;
				if ( (!fe_cookies.get('_fev'+$TC.id)) && (!fe_cookies.get('_fevs'+$TC.id)) )
				{
					if (_fe_survey_visits == 1)
					{
						$TC.vs_count = 1;
					}
					fe_cookies.set('_fev'+$TC.id, '1', { expires: 180, path: '/' });
					fe_cookies.set('_fevs'+$TC.id, '1', { path: '/' });
				} else if (!fe_cookies.get('_fevs'+$TC.id))
				{
					if (parseInt(fe_cookies.get('_fev'+$TC.id))+1 >= _fe_survey_visits)			
					{
						$TC.vs_count = 1;
					}
					fe_cookies.set('_fev'+$TC.id, parseInt(fe_cookies.get('_fev'+$TC.id))+1, { expires: 180, path: '/' });
					fe_cookies.set('_fevs'+$TC.id, '1', { path: '/' });
				} else if (parseInt(fe_cookies.get('_fev'+$TC.id)) >= _fe_survey_visits)			
				{
					$TC.vs_count = 1;
				}
				
				$TC.pv_count = $TC.pv_count || 0;
				if (!fe_cookies.get('_fep'+$TC.id) && $TC.survey_pageviews == 1)
				{
					$TC.pv_count = 1;
					fe_cookies.set('_fep'+$TC.id, '1', { path: '/' });
				} else if (!fe_cookies.get('_fep'+$TC.id) && $TC.survey_pageviews > 1)
				{
					fe_cookies.set('_fep'+$TC.id, '1', { path: '/' });
				} else if (parseInt(fe_cookies.get('_fep'+$TC.id))+1 >= $TC.survey_pageviews)			
				{
					$TC.pv_count = 1;
					fe_cookies.set('_fep'+$TC.id, parseInt(fe_cookies.get('_fep'+$TC.id))+1, { path: '/' });
				} else
				{
					fe_cookies.set('_fep'+$TC.id, parseInt(fe_cookies.get('_fep'+$TC.id))+1, { path: '/' });
				}
								
				if( ( _fe_is_content == 1 || (_fe_is_content != 1 && _fe_flt.indexOf(fexam_MD5($TC.email)) == -1) ) && (!fe_cookies.get('_fec'+$TC.id)) && (!fe_cookies.get('_fes'+$TC.id)) && $TC.vs_count == 1 && $TC.pv_count == 1)
				{  
					if ( Math.floor((Math.random()*100)+1) <= _fe_sperc)
					{
						jQuery('head').append(_fe_nps_style);
						jQuery('body').append(_fe_nps_html);
						
						if (typeof Wix != "undefined")
						{	
							setTimeout('Wix.resizeWindow(670,385);', _fe_survey_delay*1000);
						}
				
						setTimeout('jQuery("#fexam_nps").animate({top:"+=500"}, 2000, function() {});', _fe_survey_delay*1000);
						setTimeout('jQuery("#fexam_nps_bot").fadeIn();', _fe_survey_delay*1000+3000);
						
						if ($TC.survey_close == 1)
						{
							jQuery('#fexam_close').show();
						}
					    
						var request_show = jQuery.ajax({
							url: "https://tag.fanexam.com/nps_show",
							type: "GET",
							data: {action:2, uid:$TC.uid, cid:$TC.id, pkey:$TC.email, hash:_fe_uid, numvisit:fe_cookies.get('_fev'+$TC.id), tags:$TC.tags, url:$TC.referrer},
							dataType: "html",
							xhrFields: {
					    		withCredentials: false
					    	}
						});
						fe_cookies.set('_fes'+$TC.id, '1', { path: '/' });
					    
					} else 
					{
						fe_cookies.set('_fec'+$TC.id, '0', { expires: _fe_survey_daysbetween, path: '/' });
					}
				}
			});
		}
	}
}


if ($TC.id == 1129)
{
	if (!fe_cookies.get('_fex'+$TC.id))
	{
		$TC.xpvisits = Math.floor(Math.random()*4)+3;
		fe_cookies.set('_fex'+$TC.id, $TC.xpvisits.toString(), { expires: 365, path: '/' });
		_fe_survey_visits = $TC.xpvisits;
	}  else
	{
		_fe_survey_visits = fe_cookies.get('_fex'+$TC.id);
	}
}
if ($TC.id == 5347)
{
	if (!fe_cookies.get('_fex'+$TC.id))
	{
		$TC.xpvisits = Math.floor(Math.random()*4)+4;
		fe_cookies.set('_fex'+$TC.id, $TC.xpvisits.toString(), { expires: 365, path: '/' });
		_fe_survey_visits = $TC.xpvisits;
	}  else
	{
		_fe_survey_visits = fe_cookies.get('_fex'+$TC.id);
	}
}



$TC.uid = fexam_randomString(20, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');

if ( (!fe_cookies.get('_fec')) && (!fe_cookies.get('_fes')) || ($TC.test) )
{
	if (typeof jQuery == 'undefined') {
		var script = document.createElement('script');
		script.src = '//code.jquery.com/jquery-1.11.0.min.js';
		script.type = 'text/javascript';
		document.getElementsByTagName('head')[0].appendChild(script);
		
		setTimeout('fexam_show_nps();', 3000);
	} else
	{
		fexam_show_nps()
	}
}


function log_call()
{
	var request_show = jQuery.ajax({
		url: "https://tag.fanexam.com/nps_show",
		type: "GET",
		data: {action:3, uid:$TC.uid, cid:$TC.id, pkey:$TC.email, hash:'', numvisit:fe_cookies.get('_fev'+$TC.id), tags:$TC.tags, url:$TC.referrer},
		dataType: "html",
		xhrFields: {
    		withCredentials: false
    	}
	});
}

if (typeof jQuery == 'undefined') {
	var script = document.createElement('script');
	script.src = '//code.jquery.com/jquery-1.11.0.min.js';
	script.type = 'text/javascript';
	document.getElementsByTagName('head')[0].appendChild(script);
	
	setTimeout('log_call();', 3000);
} else
{
	log_call()
}