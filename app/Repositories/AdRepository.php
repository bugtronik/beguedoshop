<?php

namespace App\Repositories;

use App\Models\Ad;
use Carbon\Carbon;

Class AdRepository {

    /**
     * Search
     * 
     * @param \Illuminate\Http\Request $request
     */
    public function search ($request) {
        $ads = Ad::query();

        if ($request->region != 0) {
            $ads = Ad::whereHas('region', function ($query) use ($request) {
                $query->where('regions.id', $request->region);
            });
        }

        if ($request->category != 0) {
            $ads->whereHas('category', function ($query) use ($request) {
                $query->where('categories.id', $request->category);
            });
        }

        return $ads->with('category', 'photos')
                    ->whereActive(true)
                    ->latest()
                    ->paginate(3);
    }

    /**
     * Methode pour récupérer les annonces une photos
     */
    public function getPhotos ($ad) {
        return $ad->photos()->get();
    }

    /**
     * Methode de récuperation d'une annonce
     * 
     * @param $id int
     * @return Ad
     */
    public function getById ($id) {
        return Ad::findOrFail($id);
    }

    public function create($data)
    {
        return Ad::create($data);
    }

    /**
     * Methode pour le renseignement des cartes avec le nombre d'éléments de chaque catégories
     */
    public function noActiveCount ($ads = null) {

        if ($ads) {
            return $ads->where('active', false)->count();
        }

        return Ad::where('active', false)->count();
    }

    public function obsoleteCount ($ads = null) {

        if ($ads) {
            return $ads->where('active', true)->where('limit', '<', Carbon::now())->count();
        }

        return Ad::where('limit', '<', Carbon::now())->count();
    }

    //Méthode de récuparation des annonces non actives paginées classées par date
    public function noActive ($nbr) {
        return Ad::whereActive(false)->latest()->paginate($nbr);
    }

    //Méthode pour l'approbation d'une annonce
    public function approve ($ad) {
        $ad->active = true;
        $ad->save();
    }

    //Méthode pour le refus d'une annonce
    public function delete ($ad) {
        $ad->delete();
    }

    //Methode d'envoie d'annonces obsolètes paginées
    public function obsolete($nbr) {
        return Ad::where('limit', '<', Carbon::now())->latest('limit')->paginate($nbr);
    }

    //Méthode d'ajout de semaine à une annonce
    public function addWeek ($ad) {

        $limit = Carbon::create($ad->limit);
        $limit->addWeek();
        $ad->limit = $limit;
        $ad->save();

        return $limit;
    }

    public function activeCount($ads) {
        return $ads->where('active', true)->where('limit', '>=', Carbon::now())->count();
    }

    public function getByUser ($user) {
        return $user->ads()->get();
    }

    public function active ($user, $nbr) {
        return $user->ads()->whereActive(true)->where('limit', '>=', Carbon::now())->paginate($nbr);
    }

    public function update ($ad) {
        $ad->update();
    }

    public function attente ($user, $nbr) {
        return $user->ads()->whereActive(false)->paginate($nbr);
    }

    public function obsoleteForUser ($user, $nbr) {
        return $user->ads()->where('limit', '<', Carbon::now())->latest('limit')->paginate($nbr);
    }
}