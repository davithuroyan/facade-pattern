<?php

class SmartHomeSystem
{
    protected $lightSystem;
    protected $soundSystem;
    protected $airSystem;

    public function __construct(LightSystem $lightSystem, SoundSystem $soundSystem, AirSystem $airSystem)
    {
        $this->lightSystem = $lightSystem;
        $this->soundSystem = $soundSystem;
        $this->airSystem = $airSystem;
    }

    public function setPartyMode()
    {
        echo 'Party Mode' . PHP_EOL;

        $this->soundSystem->setVolumeHigh();
        $this->lightSystem->setLow();
        $this->airSystem->setCoolingMode();
    }

    public function setRestMode()
    {
        echo 'Rest Mode' . PHP_EOL;
        $this->soundSystem->setVolumeLow();
        $this->lightSystem->setLow();
        $this->airSystem->setMediumHumidityMode();
    }

    public function setWorkoutMode()
    {
        echo 'Workout Mode' . PHP_EOL;
        $this->soundSystem->setVolumeMedium();
        $this->lightSystem->setMedium();
        $this->airSystem->setLowHumidityMode();
    }

    public function setMaintenanceMode()
    {
        echo 'Maintenance Mode' . PHP_EOL;

        $this->soundSystem->setVolumeMedium();
        $this->soundSystem->setVolumeLow();
        $this->soundSystem->setVolumeHigh();
        $this->lightSystem->setMedium();
        $this->lightSystem->setLow();
        $this->lightSystem->setBright();
        $this->airSystem->setMediumHumidityMode();
        $this->airSystem->setLowHumidityMode();
        $this->airSystem->setCoolingMode();
        $this->soundSystem->turnOff();
        $this->lightSystem->turnOff();
        $this->airSystem->turnOff();
    }

    public function turnOff()
    {
        echo 'Turn Off System' . PHP_EOL;

        $this->soundSystem->turnOff();
        $this->lightSystem->turnOff();
        $this->airSystem->turnOff();
    }

}