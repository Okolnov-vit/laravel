php<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Запуск миграции: создание таблицы products.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // автоинкрементный первичный ключ
            $table->unsignedBigInteger('category_id'); // внешний ключ для связи с категориями
            $table->string('name'); // название продукта
            $table->text('description')->nullable(); // описание (может быть пустым)
            $table->decimal('price', 10, 2); // цена (до 99999999.99)
            $table->string('image')->nullable(); // изображение, может быть пустым
            $table->timestamps(); // поля created_at и updated_at
        });
        
        // Можно добавить внешний ключ, если таблица categories есть
        // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
    }

    /**
     * Откат миграции: удаление таблицы products.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
