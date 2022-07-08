<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
           <!-- GTranslate: https://gtranslate.io/ -->
                    <select onchange="doGTranslate(this);"><option value="">Select Language</option
                        ><option value="en|af">Afrikaans</option><option value="en|sq">Albanian</option>
                        <option value="en|ar">Arabic</option><option value="en|hy">Armenian</option>
                        <option value="en|az">Azerbaijani</option><option value="en|eu">Basque</option>
                        <option value="en|be">Belarusian</option><option value="en|bg">Bulgarian</option>
                    <option value="en|ca">Catalan</option><option value="en|zh-CN">Chinese (Simplified)</option>
                        <option value="en|zh-TW">Chinese (Traditional)</option><option value="en|hr">Croatian</option>
                        <option value="en|cs">Czech</option><option value="en|da">Danish</option><option value="en|nl">Dutch</option>
                        <option value="en|en">English</option><option value="en|et">Estonian</option><option value="en|tl">Filipino</option>
                        <option value="en|fi">Finnish</option><option value="en|fr">French</option><option value="en|gl">Galician</option>
                        <option value="en|ka">Georgian</option><option value="en|de">German</option><option value="en|el">Greek</option>
                        <option value="en|ht">Haitian Creole</option><option value="en|iw">Hebrew</option><option value="en|hi">Hindi</option>
                        <option value="en|hu">Hungarian</option><option value="en|is">Icelandic</option><option value="en|id">Indonesian</option><option value="en|ga">Irish</option><option value="en|it">Italian</option><option value="en|ja">Japanese</option><option value="en|ko">Korean</option><option value="en|lv">Latvian</option><option value="en|lt">Lithuanian</option><option value="en|mk">Macedonian</option><option value="en|ms">Malay</option><option value="en|mt">Maltese</option><option value="en|no">Norwegian</option><option value="en|fa">Persian</option><option value="en|pl">Polish</option><option value="en|pt">Portuguese</option><option value="en|ro">Romanian</option><option value="en|ru">Russian</option><option value="en|sr">Serbian</option><option value="en|sk">Slovak</option><option value="en|sl">Slovenian</option><option value="en|es">Spanish</option><option value="en|sw">Swahili</option><option value="en|sv">Swedish</option><option value="en|th">Thai</option><option value="en|tr">Turkish</option><option value="en|uk">Ukrainian</option><option value="en|ur">Urdu</option><option value="en|vi">Vietnamese</option><option value="en|cy">Welsh</option><option value="en|yi">Yiddish</option></select><div id="google_translate_element2"></div>
                    <script type="text/javascript">
                    function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
                    </script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


                    <script type="text/javascript">
                    /* <![CDATA[ */
                    eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
                    /* ]]> */
                    </script>

    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to your account management panel.</h1>
    </div>
    
                    <form action="insert.php" method="post">
                        Enter your username <input type="text" name="username"><br>
                        Enter your email: <input type="text" name="email"><br>
                        Company Name: <input type="text" name="companyname"><br>
                        Terms of Service Link: <input type="text" name="toslink"><br>
                        Condensed Version of the Terms of Service: <textarea name="toscustomdata" cols="40" rows="5"></textarea>

                        <input type="submit">
                    </form>

                    <p>
        
        
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
    <a href=http://localhost/feedback.php onclick="basicPopup3(this.href);return false">Leave Feedback</a>
    <script>
    // JavaScript popup window function
    function basicPopup3(url) {
        popupWindow = window.open(url, 'popUpWindow', 'height=420,width=470,left=50,top=50,resizable=yes,scrollbars=yes,\n\
toolbar=yes,menubar=no,location=no,directories=no, status=yes')
    }

</script>
    
        <a href=http://localhost/userdatahistory.php onclick="basicPopup3(this.href);return false">Read Data History</a>
    <script>
    // JavaScript popup window function
    function basicPopup3(url) {
        popupWindow = window.open(url, 'popUpWindow', 'height=420,width=470,left=50,top=50,resizable=yes,scrollbars=yes,\n\
toolbar=yes,menubar=no,location=no,directories=no, status=yes')
    }

</script>
    
    
</body>
</html>