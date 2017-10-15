<?phpnamespace almaz44\light\calculator;use almaz44\light\calculator\L25;class CalculatorsLight{    // Выходные параметры:    public $L25;    public $price;    public $power;    public $massa;    // Входные параметры:    public $B5_RoofVisorOut; // крыша/козырек улица    public $B6_WallOut; // стена улица    public $B7_WallIn; // стена помещение    public $B8_2SideIn; // 2 стороны помещение    public $B9_4SideIn; // 4 стороны помещение    public $B11_Orientation; // ориентация (1-гор/2-вер)    public $B12_BolshStorona_cm; // большая сторона, см    public $B13_MenshStorona_cm; // меньшая сторона, см    public $B14_CvetBortov; // цвет бортов    public $B15_CvetTill; // цвет тыла    public $B16_Konstruct; // конструктив (1-раз/0-нераз)    public $B18_MaketIzobr; // макет разраб (1-зак/2-L24)    public $B19_PlenkaLic; // пленка лицевая    public $B20_FasadAkryl; // фасад акрил    public $B21_FasadPolikarb; // фасад поликарбонат    public $B22_IstochnikSveta; // источник света    public function __construct($RoofVisorOut = 0, $WallOut = 0, $WallIn = 0, $SideIn2 = 1, $SideIn4 = 0,                                $Orientation = 1,                                $BolshStorona_cm = 300, $MenshStorona_cm = 60,                                $CvetBortov = 0, $CvetTill = 0, $Konstruct = 1,                                $MaketIzobr = 1, $PlenkaLic = 3, $FasadAkryl = 0, $FasadPolikarb = 1,                                $IstochnikSveta = 'диоды')    {        $L25 = new \almaz44\light\calculator\L25($RoofVisorOut, $WallOut, $WallIn, $SideIn2, $SideIn4, $Orientation,            $BolshStorona_cm, $MenshStorona_cm, $CvetBortov, $CvetTill, $Konstruct,            $MaketIzobr, $PlenkaLic, $FasadAkryl, $FasadPolikarb, $IstochnikSveta);        $this->price = $L25->O30_StoimIzgot1shtgrn();        $this->power = $L25->O31_Energopotrebleniyevt();        $this->massa = $L25->O32_Veskg();    }    public function LightPrice()    {        return $this->price;    }    public function LightPower()    {        return $this->power;    }    public function LightMassa()    {        return $this->massa;    }}