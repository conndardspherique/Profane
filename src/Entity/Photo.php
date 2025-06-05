<?php
namespace App\Entity;

use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[Vich\Uploadable]
class Photo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;


    #[ORM\Column(length: 255)]
    private ?string $filename = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[Vich\UploadableField(mapping: 'gallery_images', fileNameProperty: 'filename')]
    private ?File $imageFile = null;

    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;
        if ($imageFile !== null) {
            $this->createdAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    // getters/setters pour filename, createdAt, etc.

    public function getId(): ?int
{
    return $this->id;
}

public function getFilename(): ?string
{
    return $this->filename;
}

public function setFilename(?string $filename): self
{
    $this->filename = $filename;
    return $this;
}

public function getCreatedAt(): ?\DateTimeImmutable
{
    return $this->createdAt;
}

}
