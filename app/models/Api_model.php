<?

class Api_model {
    // home : top_rated

    public function test12() {
        // top_rated model 
        // animeee??????????????????????????
        $json = "https://api.themoviedb.org/3/movie/top_rated?api_key=".API_KEY."&page=1&include_adult=false";
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
    public function test() {
        //discover model
        //filter = sort.by look at documentation
        $json = "https://api.themoviedb.org/3/discover/movie?api_key=".API_KEY."&sort_by=popularity.desc&include_adult=false&include_video=false&page=2";
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
        // filter = all/movie/tv/people, day/week
        $json = "https://api.themoviedb.org/3/trending/movie/week?api_key=".API_KEY."&page=3";
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
        // genre model(discover)
        // filter with_genres: int
        //$json = "https://api.themoviedb.org/3/genre/movie/list?query=action&api_key=".API_KEY."&language=en-US";
        $json = "https://api.themoviedb.org/3/discover/movie?api_key=".API_KEY."&with_genres=28";
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
    public function test6() {
        // find by id model, need external_id tt11127690,tt0458339
        $json = "http://api.themoviedb.org/3/find/tt11127690?api_key=".API_KEY."&external_source=imdb_id";
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
    public function test7() {
        // find external_id model 1771,
        $json = "https://api.themoviedb.org/3/movie/701175/external_ids?api_key=".API_KEY;
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
    public function test8() {
        // movies-videos model 1771
        // url www.youtube.com/watch?v= + key
        $json = "https://api.themoviedb.org/3/movie/1771/videos?api_key=".API_KEY;
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
    public function test9() {
        // similiar model 1771
        $json = "https://api.themoviedb.org/3/movie/1771/similar?api_key=".API_KEY;
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
    public function test10() {
        // now_playing model 
        $json = "https://api.themoviedb.org/3/movie/now_playing?api_key=".API_KEY."&page=2";
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
    public function test11() {
        // pupular model 
        $json = "https://api.themoviedb.org/3/movie/popular?api_key=".API_KEY."&page=2";
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
    
    public function test13() {
        // upcoming model 
        $json = "https://api.themoviedb.org/3/movie/upcoming?api_key=".API_KEY."&page=2";
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