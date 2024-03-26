        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Schema;

        return new class extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create('pengguna', function (Blueprint $table) {
                    $table->id();
                    $table->timestamps();
                    $table->string('nama');
                    $table->string('alamat');
                    $table->string('asaluniv');
                    $table->string('jurusan');
                    $table->date('tglawal');
                    $table->date('tglakhir');
                    $table->string('status');
                    $table->decimal('total_earnings');
                });

            }

            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::dropIfExists('pengguna');
            }
        };
