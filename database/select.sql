select patient_id, patient_name, patient_status,species.species_description,clients.client_firstname,clients.client_lastname ,  Concat(Trim(client_firstname),' ',Trim(client_lastname)) as Clientname from patients
left outer join clients on patients.client_id = clients.client_id
left outer join species on patients.species_id = species.species_id
order by client_firstname asc;