<?php
class  TicketMapper
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getTickets()
    {
        $sth = $this->db->prepare("SELECT * FROM report_schema");
        $sth->execute();
        return $sth->fetchAll();
    }

}
