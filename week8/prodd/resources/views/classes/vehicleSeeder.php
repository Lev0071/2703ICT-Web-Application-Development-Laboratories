<?php

    use wad\Vehicle;
    include 'vehicle.php';

    class VehicleSeeder{
        public static function seedVehicles(){

            //$vehiclesClass = array();
            $vehiclesClass = [];

            $vehiclesClass[] = new Vehicle( '438•SFD', 'Toyota', 'Kluger', '2020', 45678, 4, 'Automatic', '4WD','images/vehicles/klugger.jpg');
            $vehiclesClass[] = new Vehicle( '123•SFD', 'Holden', 'Commodore', '2020', 86345, 4, 'Automatic', 'Sedan','images/vehicles/commodore.jpg');
            $vehiclesClass[] = new Vehicle( '321•SFD', 'Mitsubishi', 'Eclipse', '2020', 7525, 4, 'Automatic', '4WD','images/vehicles/eclipse.png');

            return $vehiclesClass;
        }
    }
?>


<!-- rego: string-6
make: stringiest
model: string
year: number
Odometer:number
capacity: int
transmission: string
vType: [string]
booking : Booking(false, start,end)

rego: 438•SFD
make: Toyota
model: Kluger
year: 2020
Odometer:number
capacity: 7
transmission: Automatic
vType: [Urban Wagon]
booking : Booking(false, start,end)


rego: 202•XRP
make: Toyota
model: Commuter
year: 2020
Odometer:number
capacity: 12
transmission: Automatic
vType: [Small Bus]
booking : Booking(false, start,end)


rego: 361•CPA
make: Mitsubishi
model: Pajero
year: 2020
Odometer:number
capacity: 7
transmission: Automatic
vType: [Premium 4WD]
booking : Booking(false, start,end)


rego: 546•YQM
make: Kia
model: Carnival
year: 2020
Odometer:number
capacity: 8
transmission: Automatic
vType: [Intermediate Van]
booking : Booking(false, start,end)


rego: 910•ALD
make: Mitsubishi
model: Pajero
year: 2020
Odometer:number
capacity: 7
transmission: Automatic
vType: [Full Size Wagon,Sport]
booking : Booking(false, start,end)



rego: 717•WWS
make: Mitsubishi
model: Outlander
year: 2020
Odometer:number
capacity: 5
transmission: Automatic
vType: [Intermediate Wagon]
booking : Booking(false, start,end)



rego: 108•PCK
make: Mitsubishi
model: Eclipse Cross
year: 2020
Odometer:number
capacity:
transmission: Automatic
vType:[Medium]
booking : Booking(false, start,end)




rego: 557•GLM
make: Holden
model: Commodore SV6
year: 2020
Odometer:number
capacity: 5
transmission: Automatic
vType: [Sports, Sedan]
booking : Booking(false, start,end)


rego: 102•QZX
make: Mitsubishi
model: ASX
year: 2020
Odometer:number
capacity: 5
transmission:
vType: [Compact SUV]
booking : Booking(false, start,end)



rego: 229•YAG
make: Toyota
model: Camry
year: 2020
Odometer:number
capacity: 5
transmission:
vType: [Sedan]
booking : Booking(false, start,end)


rego: 749•TMI
make: Toyota
model: Corolla
year: 2020
Odometer:number
capacity: 5
transmission: Automatic
vType: [Sedan]
booking : Booking(false, start,end)



rego: 838•SAK
make: KIA
model: Cerato
year: 2020
Odometer:number
capacity: 5
transmission: Automatic
vType: [Intermediate]
booking : Booking(false, start,end)



rego: 845•STB
make: Toyota
model: Corolla
year: 2020
Odometer:number
capacity: 5
transmission: Automatic
vType: [Compact Car,Sedan]
booking : Booking(false, start,end)



rego: 232•PHZ
make: Toyota
model: Yaris
year: 2020
Odometer:number
capacity: 5
transmission: Automatic
vType: [Economy]
booking : Booking(false, start,end)



rego: 931•LWK
make: MG
model: HS
year: 2020
Odometer:number
capacity: 5
transmission: Automatic
vType: [Compact SUV]
booking : Booking(false, start,end)



rego: 899•IPV
make: Mitsubishi
model: Mirage
year: 2020
Odometer:number
capacity: 5
transmission: Automatic
vType: [Metro]
booking : Booking(false, start,end)



rego: 732•FTU
make: Mitsubishi
model: Pajero
year: 2020
Odometer:number
capacity: 5
transmission: Automatic
vType: [Full Size 4WD]
booking : Booking(false, start,end)


rego: 091•JRX
make: Suzuki
model: Jimny
year: 2020
Odometer:number
capacity: 4
transmission: Automatic
vType: [Medium]
booking : Booking(false, start,end)



rego: 090•UPA
make: Toyota
model: Yaris
year: 2020
Odometer:number
capacity: 5
transmission: Manual
vType: [Economy]
booking : Booking(false, start,end)


rego: 291•UID
make: Toyota
model: Hilux
year: 2020
Odometer:number
capacity: 5
transmission: Automatic
vType: [4WD, Dual Cab, Utility]
booking : Booking(false, start,end) -->






