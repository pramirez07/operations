<?php

namespace App\Console\Commands;

use App\Http\Controllers\OperationController;
use DivisionByZeroError;
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
        $operatorA = floatval($this->argument('operatorA'));
        $operatorB = floatval($this->argument('operatorB'));
        switch($this->argument('operation')){    
            case "add":
                $result = OperationController::add($operatorA,$operatorB);
                $this->info("Result: {$result['Result']}");
                break;
            case "subtract":
                $result = OperationController::subtract($operatorA,$operatorB);
                $this->info("Result: {$result['Result']}");
                break;
            case "multiply":
                $result = OperationController::multiply($operatorA,$operatorB);
                $this->info("Result: {$result['Result']}");
                break;
            case "divide":
                $result = OperationController::divide($operatorA,$operatorB);
                if($result['Result'] != "Can't divide by 0."){
                    $this->info("Result: {$result['Result']}");
                }
                else{
                    $this->error($result['Result']);
                }
                    
                break;
            default:
                $this->error("Operation type not supported.");
        }
        
    }
}
