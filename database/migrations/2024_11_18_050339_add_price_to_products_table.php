<?php
// File: 2024_11_18_050339_add_price_to_products_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPriceToProductsTable extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            // Jika kolom 'price' sudah ada, tidak perlu menambahkannya lagi.
            if (!Schema::hasColumn('products', 'price')) {
                $table->decimal('price', 10, 2)->notNull()->after('name');
            }
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            if (Schema::hasColumn('products', 'price')) {
                $table->dropColumn('price');
            }
        });
    }
}
