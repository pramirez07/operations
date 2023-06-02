<?php

namespace App\Console\Commands;

use App\Http\Controllers\OperationController;
use Illuminate\Console\Command;

class operations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'operations {operatorA} {operatorB} {operation}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Performs desired operation with its operators';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        switch($this->argument('operation')){
            case "add":
                $result = OperationController::add($this->argument('operatorA'),$this->argument('operatorB'));
                $this->info("Result: {$result['Result']}");
                break;
            case "subtract":
                $result = OperationController::subtract($this->argument('operatorA'),$this->argument('operatorB'));
                $this->info("Result: {$result['Result']}");
                break;
            case "multiply":
                $result = OperationController::multiply($this->argument('operatorA'),$this->argument('operatorB'));
                $this->info("Result: {$result['Result']}");
                break;
            case "divide":
                $result = OperationController::divide($this->argument('operatorA'),$this->argument('operatorB'));
                $this->info("Result: {$result['Result']}");
                break;
            default:
                $this->error("Operation type not supported.");
        }
        
    }
}
