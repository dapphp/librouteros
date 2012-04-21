NAME:

    PHP Lib RouterOS

VERSION: 1.0 (2012-04-20)

AUTHOR:

    Drew Phillips <drew@drew-phillips.com>

DOWNLOAD:

    https://github.com/dapphp/librouteros

REQUIREMENTS:
    PHP 5.2 or greater

SYNOPSIS:

    require_once 'RouterOS.php';

    $router = new Lib_RouterOS();
    $router->connect('192.168.88.1', 'admin', '');
    $command = '/system/resource/print';
    $args    = array('.proplist' => 'version,cpu,cpu-frequency,cpu-load,uptime');
    
    $response = $router->send($command, $args);
    
    print_r($response); // parsed response from API

DESCRIPTION:

    Lib_RouterOS is a PHP 5 class library for communicating with RouterOS using
    the API feature that is part of RouterOS.  Sending and receiving of data is
    greatly simplified through the interface and exceptions are used to handle
    error conditions.
    
    This class can be used to automate management of routers or provide an 
    between a PHP application that is heavily coupled with RouterOS or
    management of devices running RouterOS.  Some specific examples of tasks
    this class can perform is user management, viewing router information, or 
    managing firewall rules or hotspot accounts/settings.


COPYRIGHT:
    Copyright (c) 2012 Drew Phillips
    All rights reserved.

    Redistribution and use in source and binary forms, with or without modification,
    are permitted provided that the following conditions are met:

    - Redistributions of source code must retain the above copyright notice,
      this list of conditions and the following disclaimer.
    - Redistributions in binary form must reproduce the above copyright notice,
      this list of conditions and the following disclaimer in the documentation
      and/or other materials provided with the distribution.

    THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
    AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
    IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
    ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE
    LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
    CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
    SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
    INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
    CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
    ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
    POSSIBILITY OF SUCH DAMAGE.
    
    ---------------------------------------------------------------------------
    Many thanks to MikroTik Latvia for creating such a great product RouterOS
    and equally great hardware at low costs.
    www.mikrotik.com
    www.routerboard.com
    
    