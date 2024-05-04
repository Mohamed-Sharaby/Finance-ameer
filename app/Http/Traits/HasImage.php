<?php


namespace App\Http\Traits;


trait HasImage
{
    // Sender
    public function setSPassportAttribute($image)
    {
        if (!is_null($image) and is_file($image))
            $this->attributes['s_passport'] = uploadImage('uploads', $image);
        else
            $this->attributes['s_passport'] = $image;
    }

    public function getSPassportAttribute($image)
    {
        if (is_null($image))
            return asset('admin/assets/images/user.jpg');
        elseif (filter_var($image, FILTER_VALIDATE_URL))
            return $image;
        else
            return getimg($image);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function setSEidAttribute($image)
    {
        if (!is_null($image) and is_file($image))
            $this->attributes['s_eid'] = uploadImage('uploads', $image);
        else
            $this->attributes['s_eid'] = $image;
    }

    public function getSEidAttribute($image)
    {
        if (is_null($image))
            return asset('admin/assets/images/user.jpg');
        elseif (filter_var($image, FILTER_VALIDATE_URL))
            return $image;
        else
            return getimg($image);
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function setSSalaryAttribute($image)
    {
        if (!is_null($image) and is_file($image))
            $this->attributes['s_salary'] = uploadImage('uploads', $image);
        else
            $this->attributes['s_salary'] = $image;
    }


    public function getSSalaryAttribute($image)
    {
        if (is_null($image))
            return asset('admin/assets/images/user.jpg');
        elseif (filter_var($image, FILTER_VALIDATE_URL))
            return $image;
        else
            return getimg($image);
    }

    /////////////////////////////////////////////////Receiver //////////////////////////////////////////////////////////
    public function setRPassportAttribute($image)
    {
        if (!is_null($image) and is_file($image))
            $this->attributes['r_passport'] = uploadImage('uploads', $image);
        else
            $this->attributes['r_passport'] = $image;
    }

    public function getRPassportAttribute($image)
    {
        if (is_null($image))
            return asset('admin/assets/images/user.jpg');
        elseif (filter_var($image, FILTER_VALIDATE_URL))
            return $image;
        else
            return getimg($image);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function setREidAttribute($image)
    {
        if (!is_null($image) and is_file($image))
            $this->attributes['r_eid'] = uploadImage('uploads', $image);
        else
            $this->attributes['r_eid'] = $image;
    }

    public function getREidAttribute($image)
    {
        if (is_null($image))
            return asset('admin/assets/images/user.jpg');
        elseif (filter_var($image, FILTER_VALIDATE_URL))
            return $image;
        else
            return getimg($image);
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function setRSalaryAttribute($image)
    {
        if (!is_null($image) and is_file($image))
            $this->attributes['r_salary'] = uploadImage('uploads', $image);
        else
            $this->attributes['r_salary'] = $image;
    }


    public function getRSalaryAttribute($image)
    {
        if (is_null($image))
            return asset('admin/assets/images/user.jpg');
        elseif (filter_var($image, FILTER_VALIDATE_URL))
            return $image;
        else
            return getimg($image);
    }



}
