<?php

class Deploy {
	public function master() {
		// commands
		$shell_commands = array(
			'echo $PWD',
			'whoami',
			'git pull',
			'git submodule sync',
			'git submodule update',
			'git submodule status',
			'git status',
		);


		// Run the commands for output
		$output = '';

		foreach($shell_commands AS $command)
		{
			// Run it
			$tmp = shell_exec($command);
			// Output
			$output .= '<span class="green">$</span> <span class="blue">'.$command.'</span><br/>';
			if($tmp) $output .= '<pre class="bg-black">'.htmlentities(trim($tmp)) . "</pre>";
		}

		return $output;		
	}
}