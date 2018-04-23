select patient_name, patient_status,species.species_description,clients.client_firstname,clients.client_lastname  from patients
join clients on patients.client_id = clients.client_id
join species on patients.species_id = species.species_id
order by client_firstname asc;
