<?php
    /**
     * GIT DEPLOYMENT SCRIPT
     *
     * Used for automatically deploying websites via GitHub
     *
     */

    // array of commands
    $commands = array(
        'echo $PWD',
        'whoami',
	'git checkout -- .',
	'git reset --hard',
	'git fetch --all --prune',
        'git pull -f',
	'git reset --hard',
        'git status',
	'find -type f -exec chmod 640 {} \;',
	'find -type d -exec chmod 750 {} \;',
    );

    // exec commands
    $output = '';
    foreach($commands AS $command){
        $tmp = shell_exec($command);
        
        $output .= "<span style=\"color: #6BE234;\">\$</span><span style=\"color: #729FCF;\">{$command}\n</span><br />";
        $output .= htmlentities(trim($tmp)) . "\n<br /><br />";
    }
?>
    <!DOCTYPE HTML>
    <html lang="en-US">

    <head>
        <meta charset="UTF-8">
        <title>Git deployment script</title>
    </head>

    <body style="background-color:#000;color:#FFF;font-weight:700;padding:0 10px">
        <div style="width:700px">
            <div>
                <p style="color:#fff">Git Deployment Script</p>
                <?php echo $output; ?>
            </div>
        </div>
    </body>

    </html>
