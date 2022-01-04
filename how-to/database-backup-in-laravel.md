### Resources 

- https://learn2torials.com/a/laravel-weekly-mysql-backup


```php 


<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;

class DatabaseBackUp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command for backup the application database as .sql file';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $filename = env('DB_DATABASE') . Carbon::now()->format('_d_F_Y__h_i_s_a') . ".sql";
        $backupPath = storage_path("backup/");
        try {
            if (!file_exists($backupPath)) {
                mkdir($backupPath);
            }
            
            $db_username = env('DB_USERNAME');
            $db_password = env('DB_PASSWORD');
            $db_host = env('DB_HOST');
            $db_name = env('DB_DATABASE');
            $db_store_name = $backupPath . $filename;

            $command = "mysqldump --user=$db_username --password=$db_password --host=$db_host $db_name  >  $db_store_name";

            exec($command);
            // var_dump($output, $returnVar);

        } catch (Exception $e) {
            // echo $e->getMessage() . PHP_EOL;
        }
    }
}

```