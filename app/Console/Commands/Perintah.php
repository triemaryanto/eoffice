<?php

namespace App\Console\Commands;

use App\Models\Pegawai;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class Perintah extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'perintah';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $pegawai = Pegawai::with('relasinya')->get();

        foreach ($pegawai as $value) {
            $kirim = '';
            $token = $value->token;

            foreach ($value->relasinya as $value2) {
                $response = Http::withHeaders([
                    'Authorization' => 'Bearer ' . $token,
                ])->get($value2->url);

                $a = $response->object();
                $kirim = $kirim . json_encode($a->result);
            }

            // kirim wa
            Http::withHeaders([
                'Authorization' => "y59Vw77031Tpb0Cv8dbO5QyJVKVKi6EXoWqHCVZaVDntDUIViSMQuWvz2jkNwePM",
            ])->withoutVerifying()->post("https://pati.wablas.com/api/send-message", [
                'phone' => $value->wa,
                'message' => $kirim,
            ]);
        }
    }
}
