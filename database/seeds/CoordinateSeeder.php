<?php

use Illuminate\Database\Seeder;
use App\Coordinate;

class CoordinateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //self::defaultRegional(1);
        self::testDatabase();
    }

    private function massMakeRegionalCoordinates(int $id, array $coordantes){
        foreach ($coordantes as $coord){
            $r = new Coordinate;
            $r->region_id = $id;
            $r->long = $coord[0];
            $r->lat = $coord[1];
            $r->save();
        }
    }

    private function massMakeConstituencyCoordinates(int $id, array $coordantes)
    {
        foreach ($coordantes as $coord){
            $r = new Coordinate;
            $r->constituency_id = $id;
            $r->long = $coord[0];
            $r->lat = $coord[1];
            $r->save();
        }
    }

    private function testDatabase()
    {
        self::massMakeRegionalCoordinates(1,[[53.45, -4.8],[53.45, -3],[52.8, -3],[52.8, -4.8]]);
        self::massMakeRegionalCoordinates(2,[[52.8, -4.2],[52.8, -3],[52.2, -3],[52.2, -4.2]]);
        self::massMakeRegionalCoordinates(3,[[52.2, -5.5],[52.2, -3],[51.5, -3],[51.5, -5.5]]);

        self::massMakeConstituencyCoordinates(1,[[53.45, -4.8],[53.45, -3.9],[52.8, -3.9],[52.8, -4.8]]);
        self::massMakeConstituencyCoordinates(2,[[53.45, -3.9],[53.45, -3],[52.8, -3],[52.8, -3.9]]);
        
        self::massMakeConstituencyCoordinates(3,[[52.8, -4.2],[52.8, -3],[52.5, -3],[52.5, -4.2]]);
        self::massMakeConstituencyCoordinates(4,[[52.5, -4.2],[52.5, -3],[52.2, -3],[52.2, -4.2]]);
    
        self::massMakeConstituencyCoordinates(5,[[52.2, -5.5],[52.2, -4.6],[51.5, -4.6],[51.5, -5.5]]);
        self::massMakeConstituencyCoordinates(6,[[52.2, -4.6],[52.2, -3.8],[51.5, -3.8],[51.5, -4.6]]);
        self::massMakeConstituencyCoordinates(7,[[52.2, -3.8],[52.2, -3],[51.5, -3],[51.5, -3.8]]);

    }

    private function defaultRegional(int $startID)
    {
        self::massMakeRegionalCoordinates($startID,
            [[52.898962, -2.796021],[52.912215, -2.774048],[52.920495, -2.743835],[52.940363, -2.727356],[52.973454, -2.727356],
            [53.003215, -2.826233],[53.011478, -2.848206],[53.042864, -2.900391],[53.128646, -2.927856],[53.135238, -2.960815],
            [53.255355, -3.051453],[53.253712, -3.081665],[53.279995, -3.177795],[53.337433, -3.317871],[53.35383, -3.315125],
            [53.35383, -3.386536],[53.342353, -3.430481],[53.316108, -3.529358],[53.30298, -3.581543],[53.294772, -3.630981],
            [53.293131, -3.716125],[53.307903, -3.749084],[53.329233, -3.80127],[53.335793, -3.842468],[53.337433, -3.88916],
            [53.330873, -3.88092],[53.322671, -3.853455],[53.301338, -3.847961],[53.291489, -3.883667],[53.265213, -3.974304],
            [53.243852, -4.026489],[53.242208, -4.030609],[53.234811, -4.12674],[53.270962, -4.086914],[53.308724, -4.034729],
            [53.314467, -4.056702],[53.312006, -4.078674],[53.30298, -4.143219],[53.299697, -4.163818],[53.307903, -4.21051],
            [53.378413, -4.283295],[53.411988, -4.292908],[53.418536, -4.353333],[53.427537, -4.413757],[53.424264, -4.452209],
            [53.421809, -4.479675],[53.418536, -4.486542],[53.412806, -4.504395],[53.420172, -4.526367],[53.409532, -4.538727],
            [53.366124, -4.555206],[53.339893, -4.567566],[53.310365, -4.567566],[53.30298, -4.586792],[53.315288, -4.637604],
            [53.322671, -4.659576],[53.318569, -4.685669],[53.308724, -4.695282],[53.301338, -4.688416],[53.295593, -4.681549],
            [53.279995, -4.633484],[53.261106, -4.627991],[53.254534, -4.623871],[53.20192, -4.505768],[53.184642, -4.503021],
            [53.173942, -4.479675],[53.157477, -4.434357],[53.152536, -4.41925],[53.136885, -4.380798],[53.13359, -4.372559],
            [53.128646, -4.358826],[53.117933, -4.356079],[53.092375, -4.350586],[53.080827, -4.350586],[53.061025, -4.32312],
            [53.041213, -4.015503],[53.039562, -3.982544],[53.047818, -3.46344],[53.008173, -3.499146],[52.99495, -3.372803],
            [52.956912, -3.2547],[52.948638, -3.257446],[52.937052, -3.109131],[52.950293, -3.073425],[52.965184, -3.026733],
            [52.958566, -3.007507],[52.960221, -2.996521],[52.969319, -2.970428],[52.949465, -2.889404]]
        );

        self::massMakeRegionalCoordinates($startID + 1,
            [[53.028, -4.365692],[52.996603, -4.413757],[52.966011, -4.479675],[52.933741, -4.575806],[52.908902, -4.630737],
            [52.878247, -4.676056],[52.855864, -4.702148],[52.855035, -4.730988],[52.835129, -4.721375],[52.824342, -4.741974],
            [52.809403, -4.759827],[52.796119, -4.768066],[52.784492, -4.76532],[52.782001, -4.737854],[52.801101, -4.718628],
            [52.791967, -4.691162],[52.803592, -4.659576],[52.796949, -4.638977],[52.811063, -4.559326],[52.801101, -4.541473],
            [52.787815, -4.516754],[52.791137, -4.493408],[52.800271, -4.483795],[52.840936, -4.481049],[52.847571, -4.467316],
            [52.884049, -4.384918],[52.890678, -4.33136],[52.902276, -4.31488],[52.913871, -4.195404],[52.908074, -4.155579],
            [52.914699, -4.121246],[52.90973, -4.096527],[52.920495, -4.062195],[52.911387, -4.073181],[52.897306, -4.117126],
            [52.856693, -4.12674],[52.836788, -4.119873],[52.786153, -4.134979],[52.762061, -4.11026],[52.744606, -4.063568],
            [52.713835, -4.056702],[52.613889, -4.132233],[52.596375, -4.125366],[52.583026, -4.10614],[52.552141, -4.086914],
            [52.547966, -4.023743],[52.557151, -3.966064],[52.538779, -3.974304],[52.528755, -4.066315],[52.476925, -4.060822],
            [52.372246, -4.113007],[52.282442, -4.185791],[52.247142, -4.239349],[52.226958, -4.297028],[52.208448, -4.345093],
            [52.185721, -4.430237],[52.153714, -4.523621],[52.135174, -4.649963],[52.114939, -4.743347],[52.067689, -4.812012],
            [52.030528, -4.855957],[52.033908, -4.938354],[52.028838, -5.07843],[52.006865, -5.114136],[51.942572, -5.240479],
            [51.907002, -5.317383],[51.886664, -5.350342],[51.847656, -5.234985],[51.847656, -5.133362],[51.813709, -5.138855],
            [51.795027, -5.130615],[51.747439, -5.259705],[51.737235, -5.331116],[51.711714, -5.218506],[51.69299, -5.20752],
            [51.669148, -5.166321],[51.669148, -5.105896],[51.618017, -5.067444],[51.602666, -5.018005],[51.594135, -4.957581],
            [51.635067, -4.864197],[51.658927, -4.671936],[51.715118, -4.682922],[51.727028, -4.567566],[51.728729, -4.498901],
            [51.728729, -4.432983],[51.733833, -4.408264],[51.704906, -4.378052],[51.664038, -4.306641],[51.662334, -4.246216],
            [51.658927, -4.205017],[51.646998, -4.22699],[51.658927, -4.147339],[51.669148, -4.048462],[51.68618, -3.938599],
            [51.69299, -3.90564],[51.730431, -3.878174],[51.801822, -3.834229],[51.79163, -3.652954],[51.75764, -3.603516],
            [51.79163, -3.526611],[51.818803, -3.427734],[51.79163, -3.273926],[51.781436, -3.153076],[51.774638, -2.999268],
            [51.788232, -2.856445],[51.839172, -2.856445],[51.856139, -2.894897],[51.876491, -2.938843],[51.920556, -2.977295],
            [51.967962, -3.026733],[52.001792, -3.081665],[52.032218, -3.103638],[52.066, -3.103638],[52.093008, -3.12561],
            [52.123371, -3.158569],[52.13686, -3.131104],[52.143602, -3.092651],[52.157085, -3.114624],[52.173932, -3.114624],
            [52.205924, -3.087158],[52.237892, -3.065186],[52.266477, -2.952576],[52.283282, -3.002014],[52.345408, -3.03772],
            [52.404095, -3.169556],[52.432572, -3.240967],[52.499504, -3.051453],[52.511206, -3.03772],[52.552976, -3.010254],
            [52.561325, -3.02124],[52.546296, -3.059692],[52.557986, -3.122864],[52.629729, -3.070679],[52.717995, -3.03772],
            [52.719658, -3.004761],[52.713003, -2.966309],[52.729639, -2.969055],[52.739618, -2.996521],[52.759568, -3.040466],
            [52.784492, -3.095398],[52.816043, -3.155823],[52.840936, -3.15033],[52.902276, -3.117371],[52.933741, -3.02948],
            [52.966838, -3.002014],[52.949465, -2.889404],[52.969319, -2.970428],[52.960221, -2.996521],[52.958566, -3.007507],
            [52.965184, -3.026733],[52.950293, -3.073425],[52.937052, -3.109131],[52.948638, -3.257446],[52.956912, -3.2547],
            [52.99495, -3.372803],[53.008173, -3.499146],[53.047818, -3.46344],[53.039562, -3.982544],[53.041213, -4.015503],
            [53.061025, -4.32312],[53.080827, -4.350586],[53.092375, -4.350586]]
        );
                
        self::massMakeRegionalCoordinates($startID + 2,
            [[51.664038, -4.082794],[51.657223, -4.073868],[51.656797, -4.071808],[51.651259, -4.115067],[51.642737, -4.121933],
            [51.636772, -4.139786],[51.632936, -4.156265],[51.626116, -4.167938],[51.623985, -4.185791],[51.629526, -4.198151],
            [51.64572, -4.244156],[51.636772, -4.251709],[51.6291, -4.255829],[51.62569, -4.262695],[51.609489, -4.31076],
            [51.603945, -4.302521],[51.598401, -4.299774],[51.57963, -4.290161],[51.568961, -4.295654],[51.55829, -4.316254],
            [51.558717, -4.290848],[51.541638, -4.235916],[51.542919, -4.20639],[51.544627, -4.173431],[51.5442, -4.158325],
            [51.542065, -4.151459],[51.553167, -4.154892],[51.563839, -4.146652],[51.565973, -4.132919],[51.565973, -4.121933],
            [51.565547, -4.104767],[51.555301, -4.053268],[51.563412, -4.055328],[51.565973, -4.036102],[51.56512, -4.021683],
            [51.560851, -3.998337],[51.561705, -3.979797],[51.565973, -3.974991],[51.572802, -3.981171],[51.575789, -3.994217],
            [51.58219, -3.99353],[51.589869, -3.994904],[51.609915, -3.923492],[51.617164, -3.880234],[51.614606, -3.857574],
            [51.605225, -3.832855],[51.573229, -3.79921],[51.492927, -3.738785],[51.489079, -3.732605],[51.481383, -3.716125],
            [51.473685, -3.705139],[51.475396, -3.66806],[51.467697, -3.644714],[51.508742, -3.466187],[51.539502, -3.470306],
            [51.548897, -3.489532],[51.559144, -3.516998],[51.580483, -3.500519],[51.600107, -3.506012],[51.631657, -3.58429],
            [51.652963, -3.56781],[51.678516, -3.569183],[51.698949, -3.574677],[51.706608, -3.604889],[51.732132, -3.589783],
            [51.749139, -3.596649],[51.75849, -3.609009],[51.788232, -3.657074],[51.796726, -3.828735],[51.688734, -3.898773],
            [51.664357, -4.08288]]
        );

        self::massMakeRegionalCoordinates($startID + 3,
            [[51.465986, -3.641968],[51.458285, -3.637505],[51.451654, -3.622742],[51.445663, -3.606262],[51.438387, -3.597336],
            [51.411199, -3.569183],[51.39792, -3.523865],[51.394065, -3.487473],[51.392779, -3.468933],[51.387209, -3.440094],
            [51.387209, -3.416748],[51.37821, -3.406448],[51.382924, -3.370743],[51.380781, -3.35083],[51.391065, -3.306885],
            [51.383781, -3.291779],[51.387209, -3.25882],[51.399206, -3.22998],[51.399206, -3.190155],[51.425758, -3.158569],
            [51.45743, -3.13797],[51.47283, -3.12149],[51.485659, -3.122864],[51.501049, -3.114624],[51.51558, -3.103638],
            [51.532669, -3.110504],[51.547189, -3.132477],[51.552313, -3.172302],[51.546335, -3.208008],[51.542919, -3.289032],
            [51.553167, -3.324738],[51.585603, -3.320618],[51.612047, -3.334351],[51.652963, -3.368683],[51.669148, -3.372803],
            [51.704906, -3.360443],[51.71767, -3.365936],[51.745738, -3.419495],[51.780586, -3.381042],[51.793328, -3.390656],
            [51.799274, -3.414001],[51.816256, -3.426361],[51.791205, -3.525238],[51.75679, -3.602142],[51.731706, -3.587723],
            [51.706768, -3.604031],[51.698949, -3.574247],[51.678091, -3.568325],[51.65275, -3.567295],[51.631764, -3.582573],
            [51.599894, -3.504982],[51.580057, -3.498802],[51.559144, -3.515282],[51.548897, -3.488503],[51.539289, -3.469276],
            [51.508529, -3.4655],[51.466628, -3.644028]]
        );

        self::massMakeRegionalCoordinates($startID + 4,
            [[51.499339, -3.079605],[51.528397, -2.993088],[51.542919, -2.991028],[51.537794, -2.874985],[51.551459, -2.821426],
            [51.586883, -2.688904],[51.612047, -2.662125],[51.627821, -2.664185],[51.64359, -2.676544],[51.658927, -2.671051],
            [51.721924, -2.686157],[51.731281, -2.679291],[51.742337, -2.673111],[51.789081, -2.785721],[51.789081, -2.832413],
            [51.785259, -2.857132],[51.770814, -2.997208],[51.790249, -3.274612],[51.816468, -3.424301],[51.800335, -3.413315],
            [51.793753, -3.389969],[51.780798, -3.380527],[51.745632, -3.418808],[51.717617, -3.365765],[51.704906, -3.359928],
            [51.669202, -3.372374],[51.653016, -3.368168],[51.611888, -3.333836],[51.585283, -3.320103],[51.55338, -3.32448],
            [51.543399, -3.289289],[51.546655, -3.208008],[51.55258, -3.172302],[51.547456, -3.131876],[51.532829, -3.109989],
            [51.51558, -3.102951],[51.500916, -3.114281],[51.491564, -3.119345]]
        );
    }
}
