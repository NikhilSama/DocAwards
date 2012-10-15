API CALLS

1) Autocomplete: http://localhost/specializations/autocomplete.json

Returns the complete list of specialities, doctors, and diseases.

Optional paramters:
a) jsonp_callback: If provided then pads the returned json in the provided jsonp_callback.  eg. http://localhost/specializations/autocomplete.json?jsonp_callback=callback
b) term: If provided then returned list of specialties, doctors, and diseases is restricted to a text string match between provided term and data.  Note: Search is done on disease/specialty description as well, so while a term may not match specialty name, if it matches specialty description then the entire specialty will be returned.
eg http://localhost/specializations/autocomplete.json?jsonp_callback=callback&term=Pulm

Sample Output (no jsonp, and no term restriction)
{
    search_term: null,
    specialties: [
        {
            Specialty: {
                id: "1",
                name: "Pulmonology (Chest Medicine)",
                description: "Concerned with caring for patients with life-threatening pulmonary (lung) illnesses, such as COPD, asthma, emphysema, lung cancer, and pneumonia.  "
            }
        }
    ],
    diseases: [
        {
            Disease: {
                id: "1",
                name: "COPD (Chronic Obstructive Lung Disease)",
                description: "COPD, or chronic obstructive pulmonary (PULL-mun-ary) disease, is a progressive disease that makes it hard to breathe. "
            }
        }
    ],
    doctors: [
        {
            Doctor: {
                id: "1",
                first_name: "Rashmi",
                middle_name: "",
                last_name: "Sama"
            }
        },
        {
            Doctor: {
                id: "2",
                first_name: "Surinder",
                middle_name: "Kumar",
                last_name: "Sama"
            }
        }
    ]
}

2) Get Doctors: http://localhost/doctors/get_doctors.json

Returns list of all doctors, along with specialization, locations etc.
Optional paramters:
a) jsonp_callback: If provided then pads the returned json in the provided jsonp_callback.
eg. http://localhost/doctors/get_doctors.json?jsonp_callback=callback
b) latitude and longitude: If provided, restricts output to doctors who have at least one location within 50 KM of the provided latitude and longitude.
eg. http://localhost/doctors/get_doctors.json?jsonp_callback=callback&latitude=25&longitude=77
c) specialty_id: If provided then doctors with the specialty id provided are returned.  If latitude/long is also provided then list is further restricted to doctors with this specialty id and within the lat/long
eg. http://localhost/doctors/get_doctors.json?latitude=28.5&longitude=77&specialty_id=1
d) disease_id: If provided then doctors who specialize in treatment of this disease are returned.  If latitude/long is also provided then list is further restricted to doctors who treat this disease id and within the lat/long
e) doctor_id: If provided then all other parameters (latitude, longitude, specialty_id, disease_id) are ignored, and only the doctor with specified doctor_id is returned
Sample Output below:
[
    {
        Doctor: {
                id: "1",
                first_name: "Rashmi",
                middle_name: "",
                last_name: "Sama"
            },
            Docconsultlocation: [
                {
                    addl: "",
                    location_id: "1",
                    consultlocationtype_id: "1",
                    doctor_id: "1",
                    Location: {
                        id: "1",
                        name: "Sama Chest Center",
                        address: "8 Siri Fort Road",
                        lat: "28.554480000000",
                        long: "77.226880000000",
                        city_id: "278",
                        country_id: "102",
                        pin_code_id: "1",
                        City: {
                            name: "Delhi"
                        },
                        Country: {
                            name: "India"
                        },
                        PinCode: {
                            pin_code: "110049"
                        }
                    },
                    Consultlocationtype: {
                        name: "HOSPITAL"
                    }
                }
            ],
            Docspeclink: [
            {
            id: "1",
            specialty_id: "1",
            doctor_id: "1",
            Specialty: {
            name: "Pulmonology (Chest Medicine)",
            description: "Concerned with caring for patients with life-threatening pulmonary (lung) illnesses, such as COPD, asthma, emphysema, lung cancer, and pneumonia.  "
            }
            }
            ],
            DoctorContact: [
            {
            phone: "9971890707",
            email: "rashmisama@gmail.com",
            doctor_id: "1"
            }
            ],
            Experience: [
            {
            from: "2012-01-15",
            to: "2012-10-20",
            dept: "Pulmonology",
            location_id: "1",
            doctor_id: "1",
            Location: {
            name: "Sama Chest Center",
            address: "8 Siri Fort Road",
            lat: "28.554480000000",
            long: "77.226880000000",
            city_id: "278",
            country_id: "102",
            pin_code_id: "1",
            City: {
            name: "Delhi"
            },
            Country: {
            name: "India"
            },
            PinCode: {
            pin_code: "110049"
            }
            }
            }
            ],
            Qualification: [
            {
            id: "1",
            degree_id: "1",
            location_id: "1",
            doctor_id: "1",
            Degree: {
            name: "MBBS"
            },
            Location: {
            name: "Sama Chest Center",
            address: "8 Siri Fort Road",
            lat: "28.554480000000",
            long: "77.226880000000",
            city_id: "278",
            country_id: "102",
            pin_code_id: "1",
            City: {
            name: "Delhi"
            },
            Country: {
            name: "India"
            },
            PinCode: {
            pin_code: "110049"
            }
            }
            }
        ]
    }
]