<?php

namespace Database\Seeders;

use App\Models\License;
use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $binnen = License::create([
            "name" => "SBF Binnen"
        ]);
        $see = License::create([
            "name" => "SBF See"
        ]);

        $todos = [
            ['path' => 'tasks/SBF_Binnen/Basis.json', 'license' => $binnen],
            ['path' => 'tasks/SBF_Binnen/Spezifisch.json', 'license' => $binnen],
            ['path' => 'tasks/SBF_Binnen/SpezifischSegel.json', 'license' => $binnen],
            ['path' => 'tasks/SBF_See/Basis.json', 'license' => $see],
            ['path' => 'tasks/SBF_See/Spezifisch.json', 'license' => $see],
        ];
        foreach ($todos as $t) {
            $this->command->comment("Inserting ${t['path']}");
            $json = json_decode(file_get_contents(storage_path($t['path'])), true);
            $this->parseJson($json, $t['license']);
            $this->command->info("Inserted ${t['path']}");
        }
        
        
    }

    private function parseJson(array $arr, License $license): void{
        foreach($arr as $a){
           $task = Task::create([
                'question' => $a['question'],
                'license_id' => $license->id,
           ]);
           foreach ($a['responses'] as $res) {
               $task->responses()->create([
                   'text' => $res['text'],
                   'correct' => $res['correct'],
               ]);
           }
           foreach ($a['images'] as $img) {
               $task->addMediaFromUrl($img['src'])->toMediaCollection();
           }

        }
    }
}
