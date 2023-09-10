public function up()
{
    Schema::create('categories', function (Blueprint $table){
    
    $table->id();
        $table->string('name');
        $table->string('slug');
        $table->timestamps();
    });
}