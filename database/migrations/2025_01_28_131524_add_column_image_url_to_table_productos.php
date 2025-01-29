<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

return new class extends Migration
{
    private string $upSqlFilePath;
    private string $downSqlFilePath;

    const FOLDER = "2_add_column_image_url_to_table_productos";

    public function __construct()
    {
        $this->upSqlFilePath = database_path() . '/migrations/sql/' . self::FOLDER . '/up.sql';
        $this->downSqlFilePath = database_path() . '/migrations/sql/' . self::FOLDER . '/down.sql';
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared(File::get($this->upSqlFilePath));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared(File::get($this->downSqlFilePath));
    }
};
