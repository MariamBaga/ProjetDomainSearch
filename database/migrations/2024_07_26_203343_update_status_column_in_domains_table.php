<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateStatusColumnInDomainsTable extends Migration
{
    public function up()
    {
        Schema::table('domains', function (Blueprint $table) {
            // Supprimer la colonne 'status' si elle existe déjà
            if (Schema::hasColumn('domains', 'status')) {
                $table->dropColumn('status');
            }

            // Ajouter la colonne 'status' avec les nouvelles valeurs 'enum'
            $table->enum('status', ['available', 'unavailable', 'reserved'])->default('available');
        });
    }

    public function down()
    {
        Schema::table('domains', function (Blueprint $table) {
            // Revenir à l'ancienne colonne 'status' si vous en avez une
            // Ceci est juste un exemple, adaptez-le selon la colonne précédente
            $table->string('status')->default('available');
        });
    }
}
