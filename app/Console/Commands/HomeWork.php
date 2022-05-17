<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class HomeWork extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'play';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $userNumber = $this->ask('Введи число от 1 до 10');
        $randNumber = rand(1, 10);
        $this->line($randNumber);
        if ($userNumber > $randNumber) {
            $this->line('Победа');
        } else {
            $this->line('Попробуй ещё раз');
        }
        return 0;
    }
}
