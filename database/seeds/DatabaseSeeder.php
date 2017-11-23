<?php

use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder
 *
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        initialize_forge_management_permissions();
        create_first_user();
        first_user_as_forge_manager();

        Artisan::call('passport:install');

        set_laravel_passport_grant_client_token();

    }
}
