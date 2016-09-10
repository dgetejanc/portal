<?php

namespace App\Tags;

use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait UsesTags
{
    /**
     * @return \App\Tags\Tag[]
     */
    public function tags()
    {
        return $this->tagsRelation;
    }

    public function tagsRelation(): MorphToMany
    {
        return $this->morphToMany(EloquentTag::class, 'taggable', 'taggables', null, 'tag_id')
            ->withTimestamps();
    }
}