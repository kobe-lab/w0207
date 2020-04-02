<?php

require 'vendor/autoload.php';
use Mailgun\Mailgun;

class Emailer{

    public function sendmail($subject, $content){
        $mgClient = new Mailgun('281e2d93bcd61f507c0bbafa5880fcea-46ac6b00-c72f5bfa');
        $domain = "sandbox251a6afe51034039b2a7063db760a96a.mailgun.org";
        # Make the call to the client.
        $result = $mgClient->sendMessage($domain, array(
            'from'	=> 'Automail <postmaster@sandbox251a6afe51034039b2a7063db760a96a.mailgun.org>',
            'to'	=> 'Jimmy <jimmylim.jl@gmail.com>',
            'subject' => $subject,
            'text'	=> $content
        ));
    }
}

?>