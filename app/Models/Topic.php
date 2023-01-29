<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;
use App\Helpers\Helper;

class Topic extends Model implements Feedable
{
    use HasFactory;

    public function toFeedItem(): FeedItem
    {
        $lang = @Helper::currentLanguage()->code;
        if (request()->input("lang") != "" && request()->input("lang") != null) {
            $lang = request()->input("lang");
        }
        return FeedItem::create()
            ->id(@$this->id)
            ->title(@$this->{"title_" . $lang})
            ->summary(@$this->{"details_" . $lang})
            ->updated(@$this->updated_at)
            ->link(Helper::topicURL(@$this->id, $lang))
            ->author(Helper::GeneralSiteSettings("site_url"));
    }

    public static function getFeedTopics()
    {
        $section_id = request()->input("section");
        $WebSection = WebmasterSection::find($section_id);
        if (!empty($WebSection)) {
            if ($WebSection->type == 0) {
                return Topic::where([['webmaster_id', '=', $section_id], ['status', 1], ['expire_date', '>=', date("Y-m-d")], ['expire_date', '<>', null]])->orWhere([['webmaster_id', '=', $section_id], ['status', 1], ['expire_date', null]])->orderby('row_no', env("FRONTEND_TOPICS_ORDER", "asc"))->get();
            }
        }
        return Topic::where("id", 0)->get();
    }

    //Relation to webmasterSections
    public function webmasterSection()
    {
        return $this->belongsTo('App\Models\WebmasterSection', 'webmaster_id');
    }

    //Relation to Sections
    public function section()
    {
        return $this->belongsTo('App\Models\Section', 'section_id');
    }

    //Relation to TopicCategory
    public function categories()
    {
        return $this->hasMany('App\Models\TopicCategory');
    }

    //Relation to Users
    public function from_topic()
    {
        return $this->belongsTo('App\Models\Topic', 'topic_id');
    }
    //Relation to Users
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'created_by');
    }

    //Relation to Photos
    public function photos()
    {
        return $this->hasMany('App\Models\Photo', 'topic_id')->orderby('row_no', 'asc');
    }

    //Relation to Attach Files
    public function attachFiles()
    {
        return $this->hasMany('App\Models\AttachFile', 'topic_id')->orderby('row_no', 'asc');
    }

    //Relation to Related Topics
    public function relatedTopics()
    {
        return $this->hasMany('App\Models\RelatedTopic', 'topic_id')->orderby('row_no', 'asc');
    }

    //Relation to Maps
    public function maps()
    {
        return $this->hasMany('App\Models\Map', 'topic_id')->orderby('row_no', 'asc');
    }


    //Relation to Comments
    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'topic_id')->orderby('row_no', 'asc');
    }

    //Relation to New Comments
    public function newComments()
    {
        return $this->hasMany('App\Models\Comment', 'topic_id')->where('status', '=', 0)->orderby('row_no', 'asc');
    }

    //Relation to approved Comments
    public function approvedComments()
    {
        return $this->hasMany('App\Models\Comment', 'topic_id')->where('status', '=', 1)->orderby('row_no', 'asc');
    }

    //Relation to Additional Fields
    public function fields()
    {
        return $this->hasMany('App\Models\TopicField', 'topic_id')->orderby('id', 'asc');
    }
}
