<?php

class resumeApi extends Api {

    public function serachResume($keyword, $page) {

        $api_url = $this->api_url . '/position?keyword=' . $keyword . '&page=' . $page;

        $result = transferData($api_url, 'get');

        return json_decode($result, true);
    }

    public function getResumeDetail($id) {

        if (!empty($id) && $id > 0) {

<<<<<<< HEAD
            $api_url = $this->api_url . '/positionDetail?id=' . $id;
=======

	public function getResumeDetail($id){
>>>>>>> d68ae2aee98f12eb4e5770f9a3a2aa6903b115e7

            $result = transferData($api_url, 'get');

            return json_decode($result, true);
        }
    }

    public function test(){

        $url ='http://112.124.25.155/voice_api/voice/get_voice_list/?type=japan';

        $result = transferData($url, 'get');

        return json_decode($result, true);


    }

}

?>