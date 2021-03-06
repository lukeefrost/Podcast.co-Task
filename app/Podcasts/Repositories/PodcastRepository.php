<?php

namespace App\Podcasts\Repositories;

use App\Podcasts\Podcast;
use App\Podcasts\Exceptions\CreatePodcastErrorException;
use App\Podcasts\Exceptions\PodcastNotFoundException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;

class PodcastRepository {

    protected $model;

  /**
  * PodcastRepository constructor.
  * @param Podcast $podcast
  */
    public function _construct(Podcast $podcast)
    {
        $this->model = $podcast;
    }

    /**
    * @param Podcast $podcast
    * @return Podcast
    * @throws CreatePodcastErrorException
    */
    public function createPodcast(array $data) : Podcast {
        try {
            return $this->model->create($data);
        } catch (QueryException $e) {
            throw new CreatePodcastErrorException($e);
        }
    }

    /**
    * @param int $id
    * @return Podcast
    * @throws PodcastNotFoundException
    */
    public function findPodcast(int $id) : Podcast {
        try{
          return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $e){
          throw new PodcastNotFoundException($e);
        }
    }

    /**
    * @param array $data
    * @return bool
    * @throws UpdatePodcastErrorException
    */
    public function updatePodcast(array $data) : bool {
        try{
          return $this->model->update($data);
        } catch (QueryException $e) {
          throw new UpdatePodcastErrorException($e);
        }
    }

    /**
    * @return bool
    */
    public function deletePodcast() : bool{
        return $this->model->delete();
    }

}
