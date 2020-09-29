<?

class Api_model {

    public function test() {
        //discover model
        //filter = sort.by look at documentation
        $json = "https://api.themoviedb.org/3/discover/movie?api_key=".API_KEY."&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=1";
        $jsonfile = file_get_contents($json);
        $jsonfile = json_decode($jsonfile);

        function objectToArray ($object) {
            if(!is_object($object) && !is_array($object)){
                return $object;
            }
            return array_map('objectToArray', (array) $object);
        }

        return objectToArray($jsonfile);
    }
    public function test2() {
        //search model = movie
        $json = "https://api.themoviedb.org/3/search/movie?query=avengers&api_key=".API_KEY."&language=en-US&page=1&include_adult=false";
        //var_dump($json);
        $jsonfile = file_get_contents($json);
        $jsonfile = json_decode($jsonfile);

        function objectToArray ($object) {
            if(!is_object($object) && !is_array($object)){
                return $object;
            }
            return array_map('objectToArray', (array) $object);
        }

        return objectToArray($jsonfile);
    }
    public function test3() {
        //search multi = movie:'title', tv/people:'name'->a bit of problem 
        $json = "https://api.themoviedb.org/3/search/multi?query=avenger&api_key=".API_KEY."&language=en-US&page=1&include_adult=false";
        //var_dump($json);
        $jsonfile = file_get_contents($json);
        $jsonfile = json_decode($jsonfile);

        function objectToArray ($object) {
            if(!is_object($object) && !is_array($object)){
                return $object;
            }
            return array_map('objectToArray', (array) $object);
        }

        return objectToArray($jsonfile);
    }
    public function test4() {
        //trending model = movie/tv : title/name
        // filter = all/movie/tv/people , day/week
        $json = "https://api.themoviedb.org/3/trending/all/day?api_key=".API_KEY;
        //var_dump($json);
        $jsonfile = file_get_contents($json);
        $jsonfile = json_decode($jsonfile);

        function objectToArray ($object) {
            if(!is_object($object) && !is_array($object)){
                return $object;
            }
            return array_map('objectToArray', (array) $object);
        }

        return objectToArray($jsonfile);
    }
    public function test5() {
        //genre ? nah either it's broken or i'm too lazy to continue today
        $json = "https://api.themoviedb.org/3/genre/movie/list?query=action&api_key=".API_KEY."&language=en-US";
        //var_dump($json);
        $jsonfile = file_get_contents($json);
        $jsonfile = json_decode($jsonfile);

        function objectToArray ($object) {
            if(!is_object($object) && !is_array($object)){
                return $object;
            }
            return array_map('objectToArray', (array) $object);
        }

        return objectToArray($jsonfile);
    }
}