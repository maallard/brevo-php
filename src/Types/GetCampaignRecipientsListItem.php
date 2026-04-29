<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Json\JsonSerializableType;

class GetCampaignRecipientsListItem extends JsonSerializableType
{
    /**
     * @var ?string $id
     */
    #[JsonProperty('agentId')]
    public ?string $id;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     *
     * /**
     * @param array{
     *   id: int,
     *   name: string,
     * } $values
     */
    public function __construct(
        array $values,
    )
    {
        $this->id = $values['id'];
        $this->name = $values['name'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
