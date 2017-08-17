<?php
/**
 * Created by PhpStorm.
 * User: administrator
 * Date: 7/11/2017
 * Time: 1:52 PM
 */

namespace App\Action;


class StoreInformation
{
    public function createStore($location)
    {
        $store = new StoreObject();
        $store->setAddress($this->address($location));
        $store->setHours($this->hours($location));
        $store->setMap($this->map($location));
        $store->setState($this->addressBottom($location));
        $store->setPhone($this->phone($location));
        $store->setTitle($this->title($location));

        return $store;
    }

    public function hours($location)
    {
        switch ($location) {
            case 'bartonville':
                return "Mon - Sat: 10:30am - 9pm";
                break;
            case 'bloominton-vernon':
                return "Mon - Sat: 10:30am - 9pm";
                break;
            case 'bloomington-main' :
                return "Mon - Sat: 10:30am - 9pm";
                break;
            case 'chillicothe':
                return "Mon - Sat: 10:30am - 9pm";
                break;
            case 'creve-coeur':
                return "Mon - Sat: 10:30am - 9pm";
                break;
            case 'galesburg':
                return "Mon - Sat: 10:30am - 9pm";
                break;
            case 'kewanee':
                return "Mon - Sat: 10:30am - 9pm";
                break;
            case 'morton':
                return "Mon - Sat: 10:30am - 9pm";
                break;
            case 'pekin':
                return "Mon - Sat: 10:30am - 9pm";
                break;
            case 'peoria':
                return "Mon - Sat: 10:30am - 9pm";
                break;
            case 'quincy':
                return "Mon - Sat: 10:30am - 9pm";
                break;
        }
    }

    public function address($location)
    {
        switch ($location) {
            case 'bartonville':
                return "6100 South Adams Street";
                break;
            case 'bloomington-vernon':
                return "1501 Vernon Avenue";
                break;
            case 'bloomington-main' :
                return "501 South Main Street";
                break;
            case 'chillicothe':
                return "1122 North 4th Street";
                break;
            case 'creve-coeur':
                return "115 South Main Street";
                break;
            case 'galesburg':
                return "914 North Henderson Avenue";
                break;
            case 'kewanee':
                return "425 South Tenney";
                break;
            case 'morton':
                return "1917 South Main Street";
                break;
            case 'peoria':
                return "700 East War Memoria Drive";
                break;
            case 'pekin':
                return "2996 Court Street";
                break;
            case 'quincy':
                return "500 South 8th Street";
                break;
        }
    }

    public function addressBottom($location)
    {
        switch ($location) {
            case 'bartonville':
                return "Bartonville, IL 61607";
                break;
            case 'bloomington-vernon':
                return "Bloomington, IL 61701";
                break;
            case 'bloomington-main' :
                return "Bloomington, IL 61701";
                break;
            case 'chillicothe':
                return "Chillicothe, IL 61523";
                break;
            case 'creve-coeur':
                return "Creve Coeur, IL 61610";
                break;
            case 'galesburg':
                return "Galesburg, IL 61401";
                break;
            case 'kewanee':
                return "Kewanee, IL 61443";
                break;
            case 'morton':
                return "Morton, IL 61550";
                break;
            case 'peoria':
                return "Peoria, IL 61614";
                break;
            case 'pekin':
                return "Pekin, IL 61554";
                break;
            case 'quincy':
                return "Quincy, IL 62301";
                break;
        }
    }

    public function phone($location)
    {
        switch ($location) {
            case 'bartonville':
                return "309.697.1819";
                break;
            case 'bloomington-vernon':
                return "309.664.6363";
                break;
            case 'bloomington-main' :
                return "309.828.4141";
                break;
            case 'chillicothe':
                return "309.274.5488";
                break;
            case 'creve-coeur':
                return "309.694.7676";
                break;
            case 'galesburg':
                return "309.343.9988";
                break;
            case 'kewanee':
                return "309.853.2255";
                break;
            case 'morton':
                return "309.263.7716";
                break;
            case 'peoria':
                return "309.688.0800";
                break;
            case 'pekin':
                return "309.353.8485";
                break;
            case 'quincy':
                return "217.223.0303";
                break;
        }
    }

    public function title($location)
    {
        switch ($location) {
            case 'bartonville':
                return "Bartonville LaGondola";
                break;
            case 'bloomington-vernon':
                return "Bloomington LaGondola - Vernon St.";
                break;
            case 'bloomington-main' :
                return "Bloomington LaGondola - South Main St.";
                break;
            case 'chillicothe':
                return "Chillicothe LaGondola";
                break;
            case 'creve-coeur':
                return "Creve Coeur LaGondola";
                break;
            case 'galesburg':
                return "Galesburg LaGondola";
                break;
            case 'kewanee':
                return "Kewanee LaGondola";
                break;
            case 'morton':
                return "Morton LaGondola";
                break;
            case 'peoria':
                return "Peoria LaGondola";
                break;
            case 'pekin':
                return "Pekin LaGondola";
                break;
            case 'quincy':
                return "Quincy LaGondola";
                break;
        }
    }

    public function map($location)
    {
        switch ($location) {
            case 'bartonville':
                return '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3027.1141146900213!2d-89.65395138508984!3d40.64941484937986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880a5f6dd87af4f9%3A0x63f11ab7059be4a!2sLa+Gondola+Spaghetti+House!5e0!3m2!1sen!2sus!4v1498937347822" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>';
                break;
            case 'bloomington-vernon':
                return '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24275.347131471914!2d-88.99281122288932!3d40.48813026797911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880b7066c805115d%3A0xfbfb29a09ba6a474!2sLa+Gondola+Spaghetti+%26+Pizza+House!5e0!3m2!1sen!2sus!4v1498938069136" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>';
                break;
            case 'bloomington-main' :
                return '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24275.347131471914!2d-88.99281122288932!3d40.48813026797911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880b71db92a61d15%3A0x630774928aa42ee3!2sLa+Gondola+Spaghetti+House!5e0!3m2!1sen!2sus!4v1498937543108" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>';
                break;
            case 'chillicothe':
                return '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3014.8241779948294!2d-89.48911628508085!3d40.91960083282679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880a499db35bd709%3A0x6f83352b90537844!2sLa+Gondola+Spaghetti+House!5e0!3m2!1sen!2sus!4v1498938409363" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>';
                break;
            case 'creve-coeur':
                return '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3027.2991862032172!2d-89.60361708509!3d40.645334849629094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880a58585d191b65%3A0x987147ab4de804f1!2sLa+Gondola+Spaghetti+House!5e0!3m2!1sen!2sus!4v1498938523818" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>';
                break;
            case 'galesburg':
                return '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3013.070064262324!2d-90.38590638507956!3d40.95804393046434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87e19602bf277b51%3A0xf41d71fcc953574!2sLa+Gondola+Spaghetti+House!5e0!3m2!1sen!2sus!4v1498938730594" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>';
                break;
            case 'kewanee':
                return '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3000.7462829362435!2d-89.92994818507051!3d41.22729921386785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880a016251dc38b5%3A0x782a6c902b174f94!2sLa+Gondola+Spaghetti+House!5e0!3m2!1sen!2sus!4v1498938899008" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>';
                break;
            case 'morton':
                return '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3029.8276149540497!2d-89.47858388509185!3d40.589560353034834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880a55311b430e45%3A0xe39c512a98cf7be!2sLa+Gondola+Spaghetti+House!5e0!3m2!1sen!2sus!4v1498939199178" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>';
                break;
            case 'peoria':
                return '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.3791459409845!2d-89.58582948508712!3d40.731682044348936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880a5a343e64e505%3A0xa639267b6b541c25!2sLa+Gondola+Spaghetti+House!5e0!3m2!1sen!2sus!4v1498939236999" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>';
                break;
            case 'pekin':
                return '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3031.623293225315!2d-89.61080568509318!3d40.54991105545359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880af14a4154720f%3A0x16d2810c3aa81ebb!2sLa+Gondola!5e0!3m2!1sen!2sus!4v1498939280552" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>';
                break;
            case 'quincy':
                return '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3059.671144366796!2d-91.40575878511373!3d39.92637499324008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87ddf70220aadfab%3A0x767bb5c86115e2bd!2sLa+Gondola+Spaghetti+House!5e0!3m2!1sen!2sus!4v1498939317582" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>';
                break;
        }
    }

    public function test($location)
    {
        switch ($location) {
            case 'bartonville':

                break;
            case 'bloominton-vernon':

                break;
            case 'bloomington-main' :

                break;
            case 'chillicothe':

                break;
            case 'creve-coeur':

                break;
            case 'galesburg':

                break;
            case 'kewanee':

                break;
            case 'morton':

                break;
            case 'pekin':

                break;
            case 'quincy':

                break;
        }
    }
}