<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Welcome to OpenShift</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet" type="text/css" />
    <style type="text/css">
        html, body {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            padding-top: 100px;
        }

        h1 {
            font-size: 52px;
            margin-bottom: 0;
        }

        h1, h2, p {
            margin-top: 0;
            font-weight: normal;
        }

        a {
            color: #DB242F;
        }

        a:not(:hover) {
            text-decoration: none;
        }

        .container {
            display: flex;
            flex-direction: row;
            margin: 0 auto;
            width: 960px;
        }

        .section {
            padding: 15px;
        }

        .section + .section {
            margin-left: 15px;
        }

        .welcome {
            background: #eee;
            border-radius: 5px;
            text-align: center;
            flex: 0 0 300px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="section welcome">
            <div>
                <img src="/static/openshift-logo.png" alt="OpenShift Logo" />
            </div>
            <h1>Welcome!</h1>
            <p>You are running PHP <?php echo phpversion(); ?></p>
        </div>
        <div class="section">
            <h2>What's next?</h2>
            <p>Make changes to this website by editing the files inside <code>www/</code> of your repository.</p>
            <p>Commit your changes after, then push to the remote repository.</p>
            <pre><code>$ git commit -a -m "Some commit message"
$ git push origin master</code></pre>
            <h2>More</h2>
            <ul>
                <li>Visit <a href="http://www.openshift.com">http://www.openshift.com</a>.</li>
                <li>Get help in the <a href="http://www.openshift.com/forums/openshift">OpenShift forums</a>.</li>
                <li>More on the cartridge at <a href="https://github.com/pinodex/openshift-cartridge-nginx-php7">pinodex/openshift-cartridge-nginx-php7</a>.</li>
            </ul>
        </div>
    </div>
</body>
</html>