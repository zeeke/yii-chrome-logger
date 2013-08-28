<?php

namespace extensions\yiichromelogger;

class ChromeLoggerTarget extends \yii\log\Target {
    
    public function export() {
        $text = '';
		foreach ($this->messages as $message) {
			$text .= $this->formatMessage($message);
		}
        return 1;
    }    
}
