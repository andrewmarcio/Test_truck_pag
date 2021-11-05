<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GetCitiesByUf extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cities:get {Uf}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get all cities by State initials';

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
     * @return void
     */
    public function handle()
    {
        Command::info("Started request to get cities in IBGE API.");
        $state = (new \App\Utils\FindStateByUfUtil($this->argument("Uf")))->getState();
        $cities = (new \App\Utils\GetCitiesByStateIdUtil($state->id))->getCities();
        Command::info("Finished request IBGE API.");
        
        Command::info("Start to register cities in database.");
        \App\Utils\StoreCitiesUtil::store(collect($cities));
        Command::info("Finished register cities in your database.");
    }
}
