public function up(): void
{
    Schema::create('matakuliahs', function (Blueprint $table) {
        $table->string('kode_mk')->primary();
        $table->string('nama_mk');
        $table->integer('sks');
        $table->integer('semester');
        $table->timestamps();
    });
}