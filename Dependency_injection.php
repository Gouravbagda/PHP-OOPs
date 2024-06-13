<?php

class Logger {
    public function log($message)
    {
        echo "Logging message: $message";
    }
}

class UserProfile {
    private $logger;
    public function createUser()
    {
        $this->logger->log("User Created.");
    }

    public function updateUser()
    {
        $this->logger->log("user updated.");
    }
    public function deleteuser()
    {
        $this->logger->log("user deleted.");
    }
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }
}

$logger = new Logger ();
$profile = new UserProfile($logger);

$profile->createUser();
$profile->updateUser();