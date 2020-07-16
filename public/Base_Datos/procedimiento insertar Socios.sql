DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_Socios`(IN pnombre VARCHAR(50), pap_paterno VARCHAR(50), pap_materno VARCHAR(50), pdir VARCHAR(50), ptelefono VARCHAR(10))
BEGIN
declare id int;
	if not exists (select id_persona FROM personas WHERE nombre=pnombre and ap_paterno=pap_paterno and ap_materno=pap_materno and dir=pdir and telefono=ptelefono) then
		INSERT INTO personas(nombre,ap_paterno,ap_materno,dir,telefono)values(pnombre,pap_paterno,pap_materno,pdir,ptelefono);
		select(select id_persona FROM personas WHERE nombre=pnombre and ap_paterno=pap_paterno and ap_materno=pap_materno and dir=pdir and telefono=ptelefono)into id from dual;
		insert into socios(id_persona)values(id);
	else if not exists (select s.id_socio FROM personas p,socios s WHERE nombre=pnombre and ap_paterno=pap_paterno and ap_materno=pap_materno and dir=pdir and telefono=ptelefono and p.id_persona=s.id_persona) then
			select "ya existe persona";
            select(select id_persona FROM personas WHERE nombre=pnombre and ap_paterno=pap_paterno and ap_materno=pap_materno and dir=pdir and telefono=ptelefono)into id from dual;
			insert into socios(id_persona)values(id);
		else 
			select "ya existe registro";
		end if;
    end if;
END$$
DELIMITER ;
