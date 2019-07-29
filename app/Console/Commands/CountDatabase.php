<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CountDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'count:database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cuenta elementos en la base de datos';

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
     * @return mixed
     */
    public function handle()
    {
        $facultades = DB::table('facultades')
            ->count();

        $carreras = DB::table('carreras')
            ->count();

        $asignaturas = DB::table('asignaturas')
            ->count();

        $this->line("Existen $facultades facultades");
        $this->info("Existen $carreras carreras");
        $this->error("Existen $asignaturas asignaturas");
    }
}
