<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <title>Información</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: #00B4DB;
            background: -webkit-linear-gradient(to right, #0083B0, #00B4DB);
            background: linear-gradient(to right, #0083B0, #00B4DB);
        }
        h2{
            color:#00B4DB;
        }    
        .container {
            max-width: 800px;
            margin: 20px auto;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            grid-gap: 20px;
        }

        .card {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <h2>Carnet de Conducir</h2>
        <a href="https://www.generalroca.gov.ar/tramites-de-transito/" target="_blank">Aqui.</a>
    </div>

    <div id="card2" class="card">
        <h2>TALLER MUNICIPAL DE NATACIÓN: INSCRIPCIÓN PARA NATATORIO ZONA NORTE</h2>
        <div class="pdf-content">
            <p>El Municipio de Roca abre el periodo de inscripción para el Taller Municipal de Natación que se dictará en el Natatorio ubicado en el Centro Deportivo Municipal Zona Norte, en calles Maipú y Palacios.

            Las personas interesadas podrán inscribirse los días lunes 27, martes 28 y miércoles 29 de Noviembre de 9 a 12 hs. Quienes deseen asistir a clases durante el Turno Mañana deben realizar la inscripción en instalaciones del Natatorio Zona Norte (Maipú y Palacios); y quienes opten por asistir a clases del Turno Tarde, deben inscribirse en el Polideportivo Gimena López (Palacios 946). Para ambos casos, se mantienen los mismos días y horarios de inscripción consignados.

            El inicio de clases está previsto para el lunes 4 de diciembre y la propuesta para esta temporada incluye, además de los talleres por edad, clases para personas con discapacidad, aquagym y pileta libre. Para consultar horarios disponibles y otros datos de inscripción ingresar en: <a href="https://www.generalroca.gov.ar/natacionzonanorte/" target="_blank">Aqui.</a></p>
        </div>
        <button onclick="downloadPDF('card2')">Descargar PDF</button>
    </div>

    <div id="card3" class="card">
        <h2>INSCRIPCIONES BECAS MUNICIPALES PRIMARIAS Y SECUNDARIAS</h2>
        <div class="pdf-content">
        <p>Se abrieron las inscripciones para las Becas Municipales, Primarias y Secundarias, con fecha límite el próximo martes 26 de diciembre a las 12 hs.

Las mismas se realizarán de manera presencial disponible en la Secretaría de Desarrollo Social del Municipio, Mitre 710 o en las Unidades barriales que abajo se detallan.

<h5>REQUISITOS PARA LA INSCRIPCIÓN:</h5>
<ul>
    Ser estudiante argentino/a o nacionalizado/a y con una residencia mínima y continua de 2 (2) años en la ciudad de General Roca, que pueda ser acreditada.
    Ser estudiante argentino/a nacionalizada/o y con domicilio mínimo y continuo de dos (2) años en la ciudad de Roca que puedan ser acreditados.
    Cursar sus estudios en establecimientos públicos dependientes del Estado Provincial de la Ciudad de General Roca.
    Ser menor de dieciocho (18) años al momento de solicitar la Beca.
    Que al momento de la inscripción el /a estudiante haya promocionado.
    Pertenecer a un grupo familiar con ingresos no superiores al dispuesto por la categoría 4, con 44 horas de la escala salarial municipal.
    Solo podrá ser postulante a Becas un (1) integrante del grupo familiar.
    En el caso de las familias con tres hijos/as o más escolarizados/as, podrán inscribirse hasta 2 integrantes.
    En las familias con situaciones de vulneración de derechos (responsabilidad parental otorgada por resolución judicial) se podrán inscribir hasta dos (2) niños/as y/o adolescentes escolarizados/as del grupo familiar.
</ul>
<h5>DOCUMENTACIÓN A PRESENTAR/ADJUNTAR:</h5>

Al momento de la inscripción se solicitará, además de completar el formulario ÚNICO, que adjunte la siguiente documentación:
<ul>
    <li>
 Fotocopia del DNI del/a solicitante (de ambos lados).
</li>
<li> Fotocopia del Boletín: Nivel Primario (tapa, contratapa y nota conceptual), Nivel Secundario (Boletín Completo) y Nivel Inicial (talón de inscripción a nivel primario y constancia de finalización).

</li><li> Fotocopia de Certificado Médico (solo en caso de situación de discapacidad o enfermedad crónica)

</li><li> Constancia de Ingresos (fotocopia de recibo de sueldo o Certificación Negativa para quienes trabajen de manera informal de todos/as los/as integrantes convivientes mayores de 18 años. Plan social: Últimos movimientos del banco.

</li><li> Recibo de Alquiler en caso de vivienda alquilada.

</li><li> En caso de familias cuyos postulantes se encuentren a cargo de un/a adulto/a designado/a por medida de protección de derechos, se debe presentar fotocopia del trámite del ejercicio del cuidado personal del/la niño/a y adolescente del juzgado interviniente.
</li>
</ul>
<ul>
PUNTOS DE INSCRIPCIÓN:

Estarán disponibles las siguientes unidades para que puedan presentar la documentación y completar el formulario:

MUNICIPIO, DESARROLLO SOCIAL: Mitre 710 – De lunes a Viernes – De 7.30 a 13 hs

CENTRO COMUNITARIO PASO CÓRDOBA: Ercolani 7010 – Lunes y jueves – De 8 a 12 hs

CENTRO COMUNITARIO BARRIO NUEVO “LA ROSADITA”: San Juan 3657 – Lunes, martes y jueves – De 8 a 12 hs

CENTRO COMUNITARIO CHACRAMONTE: Las Retamas e Ismael Basse – Martes, miércoles y viernes – De 8 a 12 hs

CIM BARRIO NUEVO: Rosario de Santa Fe y Cauquén – De Lunes a viernes – De 8 a 12 hs

PUNTO DIGITAL BARRIO NUEVO: San Juan 3445 – De Lunes a viernes – De 8 a 12 hs

CIM TIRO FEDERAL: Palacios, esquina Don Bosco – De Lunes a viernes – De 8 a 12 hs

CENTRO LAURA VICUÑA: Maipú 3920 – Miércoles y viernes – De 8 a 12 hs

CEPLA 250 VIVIENDAS: Ushuaia y Del Libertador – De Lunes a viernes – De 8 a 12 hs y de 16 a 20 hs

CENTRO COMUNITARIO SAN MARTÍN: Tres Arroyos 1846 – Viernes – De 8 a 12 hs

J.J GÓMEZ BIBLIOTECA QUINTUN: Mitre 5340 – De lunes a viernes – De 8 a 12 hs

CENTRO COMUNITARIO EL PETRÓLEO: Jueves – De 8 a 12 hs
</ul>
Para consultas comunicarse al teléfono de la Secretaria de Desarrollo Social 4431400 interno: 2402, al 0800-2229742 o al mail: desarollosocialbecas@generalroca.gob.ar</p>
        <button onclick="downloadPDF('card3')">Descargar PDF</button>
    </div>
</div>

<script>
    function downloadPDF(cardId) {
        var element = document.getElementById(cardId);
        var contentElement = element.querySelector('.pdf-content');

        var pdfElement = document.createElement('div');
        pdfElement.appendChild(contentElement.cloneNode(true));

        html2pdf(pdfElement);
    }
</script>

</body>
</html>

