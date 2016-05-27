using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.IO;
using System.Net;
using System.Diagnostics;

using Allowerd.Core.Objects;

namespace Allowerd.Core
{
    public sealed class Warden : Plugin
    {
        public override string Author => "TheRyuzaki";
        public override string Name => nameof(Warden);
        public override int Version => 1;
        
        public Warden() {
            Interface.AddPlugin(this);
            Interface.CallHoock("Interface.Log", "Inited - Warden");
        }
    }
}
