class Car {
  constructor(branding, model, year) {
    this.branding = branding;
    this.model = model;
    this.year = year;
  }

  start() {
    console.log('Car started');
  }

  getInfos() {
    console.log(`Branding: ${this.branding}, Model: ${this.model}, Year: ${this.year}`)
  }
}

class ElectricCar extends Car {
  constructor(make, model, year, batteryCapacity) {
    super(make, model, year);
    this.batteryCapacity = batteryCapacity;
  }

  charge() {
    console.log('Charging...');
  }
}

let myCar = new Car('Toyota', 'Camry', 2022);
myCar.start()
myCar.getInfos()

let myElectricCar = new ElectricCar('Tesla', 'Model S', 2022, '100 kWh');
myElectricCar.charge()