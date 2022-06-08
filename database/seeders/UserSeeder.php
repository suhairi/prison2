<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 0;
        // LYPOMETAL
        $USER = USER::create([
            'name' => 'HAILRWAN BIN WAN DIN', 
            'username' => '770617075311', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-04-00207', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMAD FAREED BIN ABDUL RAHIM', 
            'username' => '950802095021', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '67-14-02062', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD MUHSINUN BIN WAHAB', 
            'username' => '870110025479', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '1-13-02340', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'PARAMAKUMAR A/L KUMARASAMY', 
            'username' => '761021025167', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-14-00179', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'ABDUL WAHAB BIN HASAN', 
            'username' => '930402095163', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '67-11-00711', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD FAIZAL BIN ISMAIL', 
            'username' => '930619025393', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-18-00227', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD ZAINODDIN BIN MD REJAB', 
            'username' => '770402025501', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-19-01321', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHAMAD HAFIZ BIN RAMLI', 
            'username' => '870115095249', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-14-01481', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHAMAD ZULKARNAIN BIN ZAKARIA', 
            'username' => '930929025735', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '68-19-01141', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'TEOH HENG SOON', 
            'username' => '751128025141', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-15-00557', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'SABRI BIN ISHAK', 
            'username' => '870916355581', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-15-00465', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MAHAMAD FAIRUUHSHAHLIZAN BIN MAHAMAD DAUD', 
            'username' => '870117295017', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-12-02054', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'ABD GHANI BIN ISMAIL', 
            'username' => '701004025099', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-15-00851', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'SATHES A/L CHANDRAN', 
            'username' => '921009146281', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '13-13-00013', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'ABU BAKAR B ABDUL RASHID', 
            'username' => '840812026081', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-10-00446', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'HERMANKUMAR A/L SUBRAMANIAM', 
            'username' => '841114065715', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-13-02305', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'ZULKIFLY B HASSAN', 
            'username' => '990524027681', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '23-15-00092', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'TAN ENG CHOON', 
            'username' => '661210075587', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '15-16-02347', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD FAIZAL B ZAINOL', 
            'username' => '870707025535', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '62-10-02364', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'ABDULLAH B HASHIM', 
            'username' => '810929026301', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '94-19-01025', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMMAD NIZAM B YUSUF', 
            'username' => '910318086135', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '7-19-01556', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHAMAD ZAIDI B ABD KADIR', 
            'username' => '920204026029', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '94-15-00456', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'SHAIFUL FAREZZUAN B RAMLI', 
            'username' => '930407075583', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '42-16-01083', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD IZWAN BIN BAHARI', 
            'username' => '880811025091', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '67-20-01208', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'RAMLI BIN MUSA', 
            'username' => '950116026181', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '67-14-00847', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'ABU BAKAR BIN ABD. GAIS', 
            'username' => '860803496645', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '87-17-00919', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMAD HAFIZ BIN JOHARI', 
            'username' => '990108028837', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '67-20-01105', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'VICNESWARAN A/L VIJAYAN', 
            'username' => '900108085821', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '1-08-03569', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'JAYKUMAR A/L LOGANATHAN', 
            'username' => '890610025537', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-13-02733', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'CHEAH BOON DEE', 
            'username' => '940607075229', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-16-00933', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMMAD AMIRUL ASRAF BIN DAHLAN', 
            'username' => '970308065511', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '67-17-00991', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMMAD RAIS BIN YAAKOB', 
            'username' => '900509025811', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-19-00396', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD ZAREEM BIN ABD. AZIS', 
            'username' => '971105025055', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '94-19-00031', 
            'section' => 'LYPOMETAL',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        


        //Stamping
        $USER = USER::create([
            'name' => 'AZMAN BIN MD RAZAK', 
            'username' => '851003075573', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-18-00659', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'LIM PENG TIAN', 
            'username' => '831027025409', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '68-19-01314', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'SURISRAU A/L SUBRAMANIAM', 
            'username' => '820801025237', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-18-00105', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMAD SABUDIN BIN AZIZ', 
            'username' => '770611025081', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-19-02391', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMMAD IKHWAN BIN ZAKARIA', 
            'username' => '881112085911', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '7-15-01630', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMMAD BURHAN BIN YUSOFF', 
            'username' => '910108025633', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-18-00018', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD ANAS BIN MOHD ZOLKIFLI', 
            'username' => '821222025413', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-04-01748', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'ZOLHISSAN BIN OTHMAN', 
            'username' => '730430025721', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '9-06-00078', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMMAD FARHAN BIN IBRAHIM', 
            'username' => '921212035537', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '8-16-04601', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD FAIZAL BIN NAWI', 
            'username' => '910212035575', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '8-09-03421', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'SHAMSUL AMRI BIN OMAR', 
            'username' => '780823075979', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-05-00234', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD ZUKHI BIN RAMLI', 
            'username' => '731018025345', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '7-97-00007', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD KHAIRUL AZMIL BIN ABD LATIF', 
            'username' => '880622065641', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-10-01413', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD IZWAN BIN MOHD MARZUKI', 
            'username' => '920617075267', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '68-17-00087', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'WAN MUHAMMAD HANIS BIN HARON', 
            'username' => '930502075645', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-17-01823', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'SHOHAIMI BIN ABD. RAHMAN', 
            'username' => '680826025389', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-19-00319', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHAMAD IRMAN BIN MOHD RADZI', 
            'username' => '980226075571', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-19-01377', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'JOHASLIN BIN MD. KASSAH', 
            'username' => '900119075637', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-12-00175', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'NASRI BIN AZIZAN', 
            'username' => '800902025561', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-07-00936', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMAD FAZRIN BIN HASHIM', 
            'username' => '871122355349', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-14-02134', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'ARAVAANAN A/L SINNASAMY', 
            'username' => '871108075033', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '3-09-04175', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'ROSDI B MAT DESA', 
            'username' => '790314086177', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '7-18-01521', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD FAIZAL B SAIDIN', 
            'username' => '850508026035', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '67-05-00123', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'SATHISH A/L RAMAKRISHNAN', 
            'username' => '941218065253', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '1-15-07520', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD SOFI B AZIZAN', 
            'username' => '981021026711', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-20-00781', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'UMAR BIN RAMLI', 
            'username' => '961105026219', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '67-15-01771', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD FAUZI BIN MAJID', 
            'username' => '810219025179', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-20-01490', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD NORHAN BIN MD NOOR', 
            'username' => '960415025321', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '1-20-00237', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMMAD FARHAN IKQWAN BIN SYUKUR', 
            'username' => '970524106197', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '3-19-08148', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMMAD RIDHWAN BIN ABDULLAH', 
            'username' => '851121075101', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '42-21-00261', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD FIRDAUS BIN ABD. RAZAK', 
            'username' => '870525355525', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '3-12-01338', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD KAMIL MAULA BIN OMAR', 
            'username' => '960522075287', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-18-00549', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHAMAD SABRI BIN ZAINON', 
            'username' => '680825025571', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '42-20-01229', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMMAD SYUKOR BIN ABDULLAH', 
            'username' => '961212075163', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '67-16-00264', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'HUSEN BIN MAT NAYAN', 
            'username' => '820405065077', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-09-00511', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD NAZRUL HISYAM BIN ABD. KARIM', 
            'username' => '940303125039', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '84-15-00647', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD FAIZAL BIN ABD. WAHAB', 
            'username' => '730930016709', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '7-05-01146', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'TAN ENG TAT', 
            'username' => '790826025263', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '94-17-00026', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'THIAGU A/L MANOGARAN', 
            'username' => '810129075017', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-08-02470', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'KALAIVENTHAN A/L BALAKRISHNAN', 
            'username' => '861216355703', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-17-00994', 
            'section' => 'STAMPING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        

        // PECKER
        $USER = USER::create([
            'name' => 'MUHAMMAD JAMALI BIN ABDULLAH', 
            'username' => '810910017069', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '71-17-02334', 
            'section' => 'PECKER',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD FAIZUL BIN RAZALI', 
            'username' => '800423115105', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '71-08-01722', 
            'section' => 'PECKER',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'ABDUL RASHID BIN ABD AZIZ', 
            'username' => '930313036305', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '8-11-02554', 
            'section' => 'PECKER',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'ROSDI BIN DAUD', 
            'username' => '751002035459', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '8-11-00270', 
            'section' => 'PECKER',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'KHAIRUL AZWAR BIN ZIZI', 
            'username' => '780922035235', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '8-15-01435', 
            'section' => 'PECKER',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMAD AZRUL BIN AZLAM', 
            'username' => '820910035311', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '82-16-00649', 
            'section' => 'PECKER',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHAMAD HANIFF BIN MAT SARIFF', 
            'username' => '960903035895', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '8-17-02229', 
            'section' => 'PECKER',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'HARUDIN B HARON', 
            'username' => '861130265205', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '67-06-01193', 
            'section' => 'PECKER',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MD NAJIB B BAKAR', 
            'username' => '771009025489', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-19-00161', 
            'section' => 'PECKER',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD SHUKRI B MOHD SOFI', 
            'username' => '960319025911', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '67-17-00192', 
            'section' => 'PECKER',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD AMER KHUSAIRI B MOHD NASIR', 
            'username' => '931202025691', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '94-18-00269', 
            'section' => 'PECKER',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD ZAIRUL B ZAINAL RASHID', 
            'username' => '951114025809', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '67-14-01036', 
            'section' => 'PECKER',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        

        // FINISHING
        $USER = USER::create([
            'name' => 'ISHAM BIN ISMAIL', 
            'username' => '790526025819', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-17-00111', 
            'section' => 'FINISHING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMMAD FIRDAUS BIN RAMLE', 
            'username' => '910630025783', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-19-02105', 
            'section' => 'FINISHING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD HELMI BIN ABD HALIM', 
            'username' => '970514025633', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '67-16-01696', 
            'section' => 'FINISHING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'YUSRI BIN AHMAD', 
            'username' => '850524026369', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '94-19-00844', 
            'section' => 'FINISHING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHAMMAD SAFUAN BIN NOOR RAZALI', 
            'username' => '931029026147', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '68-20-00885', 
            'section' => 'FINISHING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'THAMILARASU A/L GANESON', 
            'username' => '931220145937', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '1-13-04590', 
            'section' => 'FINISHING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'SYED ALWI BIN SYED ABDUL WAHAB', 
            'username' => '780406025831', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-07-00988', 
            'section' => 'FINISHING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'KUMAR A/L TANNIMALAI', 
            'username' => '890429025567', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '3-10-02017', 
            'section' => 'FINISHING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'JUSNIZAN BIN JUDIN', 
            'username' => '800705025837', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-11-00624', 
            'section' => 'FINISHING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'AYOB BIN MOHAMAD', 
            'username' => '750325026835', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '94-15-00058', 
            'section' => 'FINISHING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD ROSLI BIN ISMAIL', 
            'username' => '800806025043', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '68-15-00639', 
            'section' => 'FINISHING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD SHAHREL BIN MAT ESA', 
            'username' => '850211036267', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '8-13-03559', 
            'section' => 'FINISHING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMMAD AFFIQ BIN SUYUTI', 
            'username' => '981104035103', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '8-17-03978', 
            'section' => 'FINISHING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD ZAIRI AMRY BIN IBRAHIM', 
            'username' => '850103035945', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '8-13-01194', 
            'section' => 'FINISHING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD IZROL HASBULLAH BIN ABD AZIZ', 
            'username' => '960803025841', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-20-00159', 
            'section' => 'FINISHING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD SHAHRUL FIKRI BIN AZMI', 
            'username' => '970427025117', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '67-15-01924', 
            'section' => 'FINISHING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'WAN MOHD FAZEHAN BIN PAK WAN CHIK', 
            'username' => '821025085249', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-09-00856', 
            'section' => 'FINISHING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD REDZUAN BIN ISMAIL', 
            'username' => '870702305087', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '62-13-00185', 
            'section' => 'FINISHING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'ANAN BIN ABD. LATIF', 
            'username' => '770114075985', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-11-00225', 
            'section' => 'FINISHING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'ADAM DANIAL BIN ABD. JALIL', 
            'username' => '930817075607', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '10-15-00029', 
            'section' => 'FINISHING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'SUHARDDY BIN RAMLI', 
            'username' => '760224025699', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-16-01123', 
            'section' => 'FINISHING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'AZMI BIN KHALID', 
            'username' => '930130086481', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '42-18-01785', 
            'section' => 'FINISHING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHAMAD HAFIS BIN RAJIHAN', 
            'username' => '991128026323', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '67-21-00322', 
            'section' => 'FINISHING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD SHARINIZAL BIN MOHD SHARIFF', 
            'username' => '740207026341', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-17-02089', 
            'section' => 'FINISHING',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        

        // AUTO SPRAY
        $USER = USER::create([
            'name' => 'MOHD NIZAM BIN YAAKUB', 
            'username' => '881106265131', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-19-02404', 
            'section' => 'AUTO SPRAY',
        ]);
            $count++;
            $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD HAMIRUL ZAIMIE BIN ZAINON', 
            'username' => '851111145233', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-09-00455', 
            'section' => 'AUTO SPRAY',
        ]);
            $count++;
            $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHAMMAD FARIS BIN MAT ESA', 
            'username' => '910118035413', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '8-18-00895', 
            'section' => 'AUTO SPRAY',
        ]);
            $count++;
            $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'ABDULLAH BIN AHMAD', 
            'username' => '860102035723', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '8-11-04186', 
            'section' => 'AUTO SPRAY',
        ]);
            $count++;
            $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'WAN ZAMRI BIN WAN ALI', 
            'username' => '801105035809', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '8-09-00027', 
            'section' => 'AUTO SPRAY',
        ]);
            $count++;
            $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'SHEIFUL HELMI BIN AHMAD SUHAIMI', 
            'username' => '890721035957', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '8-11-02753', 
            'section' => 'AUTO SPRAY',
        ]);
            $count++;
            $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMMAD FARID BIN ABD. RAHIM', 
            'username' => '871206025937', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-17-00905', 
            'section' => 'AUTO SPRAY',
        ]);
            $count++;
            $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'AHMAD ADILAS B SULAIMAN', 
            'username' => '810615075397', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-17-00147', 
            'section' => 'AUTO SPRAY',
        ]);
            $count++;
            $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD HANIF BIN SAAD', 
            'username' => '911025026037', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-17-01986', 
            'section' => 'AUTO SPRAY',
        ]);
            $count++;
            $this->command->info($count . '. ' . $USER->name);
        

        // ROBO SPRAY
        $USER = USER::create([
            'name' => 'MOHAMAD ZHARIFF BIN ZAINOL', 
            'username' => '880710355251', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-16-00431', 
            'section' => 'ROBOSPRAY',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'BOON PRAK SERT A/L ERON', 
            'username' => '960908095037', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '94-20-00193', 
            'section' => 'ROBOSPRAY',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'ZULHAFISSAM BIN ZULKIFLI', 
            'username' => '920818035843', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '8-15-02875', 
            'section' => 'ROBOSPRAY',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD HANIFI BIN HAMZAH', 
            'username' => '870711295431', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '8-12-02609', 
            'section' => 'ROBOSPRAY',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHD ROOFEZA BIN DOLLAH @ ABDULLAH', 
            'username' => '820813035379', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '8-12-00741', 
            'section' => 'ROBOSPRAY',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMMAD SAIFUL BAHRI BIN ABDULLAH', 
            'username' => '980228115557', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '8-19-03942', 
            'section' => 'ROBOSPRAY',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'ABDUL HADI BIN MOHAMAD', 
            'username' => '940412035171', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '8-14-02466', 
            'section' => 'ROBOSPRAY',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMMAD SYAHRIZAN BIN MD. NOH', 
            'username' => '930211026173', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-14-01162', 
            'section' => 'ROBOSPRAY',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'KHAIRUL IZUAN BIN ABDULLAH', 
            'username' => '870604355355', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '62-12-00333', 
            'section' => 'ROBOSPRAY',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD NIZAL BIN MOHD NASIR', 
            'username' => '891011025759', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '68-17-01240', 
            'section' => 'ROBOSPRAY',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MANATHAVAN A/L RAJAN', 
            'username' => '830811025475', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-08-02083', 
            'section' => 'ROBOSPRAY',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'SHAHRIZAN BIN YUSOF', 
            'username' => '860314266013', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-10-00067', 
            'section' => 'ROBOSPRAY',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'SHUKRI BIN MD. ALI', 
            'username' => '740726025957', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-20-00304', 
            'section' => 'ROBOSPRAY',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD AKMARUL FITRI BIN ISMAIL', 
            'username' => '900131025587', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '67-09-00671', 
            'section' => 'ROBOSPRAY',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD AKMAL BIN MAT ISA', 
            'username' => '900407025749', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-12-00656', 
            'section' => 'ROBOSPRAY',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'PRAKASH A/L YUVARAJAN', 
            'username' => '921026075761', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-15-01187', 
            'section' => 'ROBOSPRAY',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'WAN FAIZAL BIN NIK LLAH', 
            'username' => '900917146647', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '1-07-06787', 
            'section' => 'ROBOSPRAY',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'SHAHNIZAN B MD SALLEH', 
            'username' => '870310235905', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-05-00528', 
            'section' => 'ROBOSPRAY',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'NUR MOHD IZWAN B ISMAIL', 
            'username' => '870920385089', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '52-07-00220', 
            'section' => 'ROBOSPRAY',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD FARID B AZIZAN', 
            'username' => '770726075185', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-15-01560', 
            'section' => 'ROBOSPRAY',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'SOMKIT A/L CHOO BOON NAM', 
            'username' => '820927095169', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '94-16-00411', 
            'section' => 'ROBOSPRAY',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MANSOR BIN SAIDIN', 
            'username' => '870709095043', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '67-06-01069', 
            'section' => 'ROBOSPRAY',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'IDRUS BIN MAT ISA', 
            'username' => '820708095249', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-11-01724', 
            'section' => 'ROBOSPRAY',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        

        // WAREHOUSE
        $USER = USER::create([
            'name' => 'NURHAFISZAN BIN FARIZAL', 
            'username' => '960701025381', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '94-20-00053', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'JOHARI BIN OSMAN', 
            'username' => '860903025023', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-11-01804', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'LATIFF BIN IBRAHIM', 
            'username' => '821026055201', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-11-01846', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD FAIEZ FIRDAUS BIN BAHAROM', 
            'username' => '920108025325', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '67-10-00087', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'LOKMAN HAKIM BIN AHMAD DZUKI', 
            'username' => '970412265177', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '1-19-05282', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'HAZLAMIE BIN CHE HALIM', 
            'username' => '891023026089', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '68-20-00900', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'VIGNES A/L THAMBIRAJA', 
            'username' => '950423086053', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '7-16-01149', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD RIDZUAN BIN ABDULLAH', 
            'username' => '920229095055', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '94-20-00247', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MASSRI BIN ABD MANAF', 
            'username' => '790503075485', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-14-02205', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'KAMARUL HAZLI BIN TAN', 
            'username' => '820908086419', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '7-15-01326', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMAD ZAINI BIN AZIZAN', 
            'username' => '881203025877', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-16-00434', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'ANZANEE BIN MD ZAKI', 
            'username' => '780207075801', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-16-01670', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'VEKINESWARAN A/L THARMA THURAI', 
            'username' => '990128016825', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '67-16-00003', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHAMAD YASIN BIN ISMAIL', 
            'username' => '900126035633', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '8-18-02625', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD RIDZUAN BIN MOHD NOOR', 
            'username' => '921225036175', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '8-15-04375', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMAD HISYAM BIN ABD RAHIM', 
            'username' => '880914035241', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '8-17-02756', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMMAD ZULFIKRI BIN ZAINAL', 
            'username' => '910814035599', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '82-19-00270', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD ZAHARI BIN MOHD ZAID', 
            'username' => '920831115979', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '1-14-09960', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMMAD KHALIL BIN ALWI', 
            'username' => '900227035683', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '8-16-03363', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMAD NUR SHAFIQ BIN MUHD NUR', 
            'username' => '911125035643', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '71-11-01611', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD ZAIWAN BIN AB RAHMAN', 
            'username' => '820613036051', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '8-11-04517', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD RIZUAN BIN AHMAD ROZI', 
            'username' => '880913035821', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '8-12-02086', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'ARIMAN BIN MOHAMAD', 
            'username' => '800403115749', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '71-10-02943', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOGAN A/ L SUBRAMANIAM', 
            'username' => '630306107043', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '3-03-12264', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'SURINARAINAN A/L RAGAVAN', 
            'username' => '770302026689', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-05-02282', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'SATIASIVAN A/L GANAPATI', 
            'username' => '760427075629', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-09-02774', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHAMMAD RUSLI BIN ABDULLAH', 
            'username' => '820127025365', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-06-00804', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'SHUID BIN HAMID', 
            'username' => '761109025719', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-08-01061', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'SHAHRUL RADZI BIN ABDUL GHANI', 
            'username' => '840105085356', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-07-02077', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHAMMAD KHUZAIRI BIN SOFIAN', 
            'username' => '900304025957', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '67-09-00741', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD FAIS BIN ISMAIL', 
            'username' => '920225026001', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '94-20-00774', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMMAD KHAIRUL FAHMI BIN WAHAB', 
            'username' => '951024025485', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-19-01195', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHAMMAD RIZAL BIN ABD. RAZAK', 
            'username' => '920528075871', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '62-14-00002', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'JAMIL BIN BAKAR', 
            'username' => '700205075637', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '42-10-00175', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD JASNI HERYANTO BIN MOHD REDHOWAN', 
            'username' => '841008075055', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-10-01214', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD AZLY BIN MOHD ROZI', 
            'username' => '970425075321', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '67-16-01014', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD SHAHRIDAN BIN ABDUL HALIM', 
            'username' => '970127086049', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '67-16-00893', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHAMAD SHUKRI BIN ALI', 
            'username' => '820322025619', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '68-19-01424', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHAMAD SAFWAN BIN MUSTAFFA', 
            'username' => '901022026155', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-13-00634', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHAMMAD YASSIN BIN UMAR', 
            'username' => '881226265179', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-20-01453', 
            'section' => 'WAREHOUSE',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        

        //RIDERTECH
        $USER = USER::create([
            'name' => 'MOHAMMAD FAUDZI BIN SAID', 
            'username' => '690817025271', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-05-02660', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'S MANIMARAN A/L SUBRAMANIAM', 
            'username' => '730205055051', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '3-08-03968', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD NASIR BIN ISHAK', 
            'username' => '761207025827', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '7-03-02811', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMAD FAIZUAN BIN MOHD ALI', 
            'username' => '930923025005', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-19-02392', // edit no smpp
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'ABDUL SUKOR BIN JUSOH', 
            'username' => '901110025427', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-16-01325', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'DEVAN RAJ A/L MURUGIAH', 
            'username' => '971125095077', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '94-18-00641', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHAMAD ALIFF BIN ROZI', 
            'username' => '951110015531', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '10-15-00031', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMMAD KAMILI BIN AB MANAF', 
            'username' => '951103035841', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '8-16-00022', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD KHAIRUL ANUAR BIN NORIHAN', 
            'username' => '830808015321', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '71-11-00022', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'ZULFAKRI BIN MOHAMAD', 
            'username' => '790319035213', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '8-06-00349', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHAMMAD AMIR BIN MOHD AZAHAR', 
            'username' => '920709115609', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '71-08-01405', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD AFIQ FARHAN BIN CHE AHMAD', 
            'username' => '910509036499', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '94-15-00164', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMMAD EZLY AZZIRUL BIN HAIDI', 
            'username' => '910818025865', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '68-17-00311', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHAMAD SYAFIQ BIN MOHD SOKORI', 
            'username' => '920717025697', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-18-00259', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'BADRI BIN AHMAD', 
            'username' => '891009025151', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-14-02646', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'JENAL BIN MOHAMAD YATIM', 
            'username' => '900222065269', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-15-01222', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMMAD FAIZ BIN NOOR AZMI', 
            'username' => '950502025363', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '67-15-00726', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHAMAD YUSRI BIN RAZALI', 
            'username' => '891109026063', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '68-14-02837', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD HAZRIN IZWAN BIN MOHD SHARIFF', 
            'username' => '870422025435', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-12-01049', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'ZULHILMI BIN MD ZAIN', 
            'username' => '901016025383', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-13-01578', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD ZAIDI BIN M. IDRIS', 
            'username' => '861111355037', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-12-00402', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD FIRDAUS BIN HAMIM', 
            'username' => '950907065339', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '94-17-00621', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHAMAD ZAMBRI BIN AHMAD', 
            'username' => '910602095055', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '94-14-00446', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MAHADZIR BIN AWANG', 
            'username' => '740824025037', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-06-02053', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMMAD BIN ROSMAN', 
            'username' => '971114355347', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '67-16-01684', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMAD NORHAKIME BIN ARSHAD', 
            'username' => '991210075917', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '42-21-00270', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'AZLI BIN SHAARI', 
            'username' => '890617025089', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-16-01216', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'VIJAYKUMAR A/L SHANMUGANATHAN', 
            'username' => '800728075335', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-09-01439', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'NAGERAJAN A/L BALAKRISHNAN', 
            'username' => '820723075297', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-06-01121', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD HELMEY BIN OSMAN', 
            'username' => '910726085633', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-16-00630', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'JAMALUDIN BIN IDRIS', 
            'username' => '760614025901', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '3-03-14080', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHD FAUZI BIN JUHARI', 
            'username' => '830413085181', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-19-01522', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHAMAD FAZIL BIN SAMSUDIN', 
            'username' => '841018075825', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-05-03389', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'ARFIZAL BIN SHAABAN', 
            'username' => '820926026065', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-13-00644', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'NAZRY BIN HASSAN', 
            'username' => '840708025281', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '66-09-00276', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MOHAMAD AZRULLAH BIN MOHD RODZI', 
            'username' => '870409075235', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '41-08-00869', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'ALI YUSMAN BIN BUSAERI', 
            'username' => '860128075301', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '42-20-00334', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
        $USER = USER::create([
            'name' => 'MUHAMAD SHAHRIL IZAIROL BIN MOHAMAD ROSLAN', 
            'username' => '910615086959', 
            'password' => bcrypt('password1'), 
            'role' => 'USER', 
            'status' => 'ACTIVE', 
            'nosmpp' => '7-14-01621', 
            'section' => 'RIDERTECH',
        ]);
        $count++;
        $this->command->info($count . '. ' . $USER->name);
        
    }
}
